CREATE DEFINER=`andre128`@`localhost` PROCEDURE `GetScheduleByDate`(IN `lessonStartDate` DATETIME, IN `lessonEndDate` DATETIME, IN `subjectId` INT, IN `groupId` INT, OUT `teacherId` INT, OUT `roomId` INT, OUT `isGroupBusy` BIT)
    NO SQL
BEGIN 

SET teacherId = 0;
select s.TeacherId into teacherId from teacher_schedules s
left join events as e on e.TeacherId = s.TeacherId
join teacher_subject_map as ts on ts.TeacherId = s.TeacherId
where ts.SubjectId = subjectId AND s.StartDate <= lessonStartDate and s.EndDate >= lessonEndDate AND ((e.StartDate is NULL AND e.EndDate is NULL) OR (lessonStartDate >= e.EndDate OR lessonEndDate <= e.StartDate)) LIMIT 1;

SET roomId = 0;
select s.RoomId into roomId from room_schedules s
left join events as e on e.RoomId = s.RoomId
join room_subject_map as rs on rs.RoomId = s.RoomId
where rs.SubjectId = subjectId AND s.StartDate <= lessonStartDate and s.EndDate >= lessonEndDate AND ((e.StartDate is NULL AND e.EndDate is NULL) OR (lessonStartDate >= e.EndDate OR lessonEndDate <= e.StartDate)) LIMIT 1;

select EXISTS (select * from events as e where e.GroupId = groupId AND  (e.StartDate < lessonEndDate AND e.EndDate > lessonStartDate) LIMIT 1) into isGroupBusy;

END