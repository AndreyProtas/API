--
-- ���� ������ ������� `groups`
--
INSERT INTO `groups` (`Id`, `Name`) VALUES
(1, '5A'),
(2, '5B');

--
-- ���� ������ ������� `rooms`
--
INSERT INTO `rooms` (`Id`, `Name`) VALUES
(1, 'room_11'),
(2, 'room_12'),
(3, 'room_13'),
(4, 'room_14');

--
-- ���� ������ ������� `room_schedules`
--
INSERT INTO `room_schedules` (`Id`, `RoomId`, `StartDate`, `EndDate`) VALUES
(1, 1, '2018-07-02 08:00:00', '2018-07-02 18:00:00'),
(2, 1, '2018-07-03 08:00:00', '2018-07-03 18:00:00'),
(3, 1, '2018-07-04 08:00:00', '2018-07-04 18:00:00'),
(4, 1, '2018-07-05 08:00:00', '2018-07-05 18:00:00'),
(5, 1, '2018-07-06 08:00:00', '2018-07-06 18:00:00'),
(6, 1, '2018-07-09 08:00:00', '2018-07-09 18:00:00'),
(7, 1, '2018-07-10 08:00:00', '2018-07-10 18:00:00'),
(8, 1, '2018-07-11 08:00:00', '2018-07-11 18:00:00'),
(9, 1, '2018-07-12 08:00:00', '2018-07-12 18:00:00'),
(10, 1, '2018-07-13 08:00:00', '2018-07-13 18:00:00'),
(11, 1, '2018-07-16 08:00:00', '2018-07-16 18:00:00'),
(12, 1, '2018-07-17 08:00:00', '2018-07-17 18:00:00'),
(13, 1, '2018-07-18 08:00:00', '2018-07-18 18:00:00'),
(14, 1, '2018-07-19 08:00:00', '2018-07-19 18:00:00'),
(15, 1, '2018-07-20 08:00:00', '2018-07-20 18:00:00'),
(16, 1, '2018-07-23 08:00:00', '2018-07-23 18:00:00'),
(17, 1, '2018-07-24 08:00:00', '2018-07-24 18:00:00'),
(18, 1, '2018-07-25 08:00:00', '2018-07-25 18:00:00'),
(19, 1, '2018-07-26 08:00:00', '2018-07-26 18:00:00'),
(20, 1, '2018-07-27 08:00:00', '2018-07-27 18:00:00'),
(21, 1, '2018-07-30 08:00:00', '2018-07-30 18:00:00'),
(22, 1, '2018-07-31 08:00:00', '2018-07-31 18:00:00'),
(23, 2, '2018-07-02 08:00:00', '2018-07-02 18:00:00'),
(24, 2, '2018-07-03 08:00:00', '2018-07-03 18:00:00'),
(25, 2, '2018-07-04 08:00:00', '2018-07-04 18:00:00'),
(26, 2, '2018-07-05 08:00:00', '2018-07-05 18:00:00'),
(27, 2, '2018-07-06 08:00:00', '2018-07-06 18:00:00'),
(28, 2, '2018-07-09 08:00:00', '2018-07-09 18:00:00'),
(29, 2, '2018-07-10 08:00:00', '2018-07-10 18:00:00'),
(30, 2, '2018-07-11 08:00:00', '2018-07-11 18:00:00'),
(31, 2, '2018-07-12 08:00:00', '2018-07-12 18:00:00'),
(32, 2, '2018-07-13 08:00:00', '2018-07-13 18:00:00'),
(33, 2, '2018-07-16 08:00:00', '2018-07-16 18:00:00'),
(34, 2, '2018-07-17 08:00:00', '2018-07-17 18:00:00'),
(35, 2, '2018-07-18 08:00:00', '2018-07-18 18:00:00'),
(36, 2, '2018-07-19 08:00:00', '2018-07-19 18:00:00'),
(37, 2, '2018-07-20 08:00:00', '2018-07-20 18:00:00'),
(38, 2, '2018-07-23 08:00:00', '2018-07-23 18:00:00'),
(39, 2, '2018-07-24 08:00:00', '2018-07-24 18:00:00'),
(40, 2, '2018-07-25 08:00:00', '2018-07-25 18:00:00'),
(41, 2, '2018-07-26 08:00:00', '2018-07-26 18:00:00'),
(42, 2, '2018-07-27 08:00:00', '2018-07-27 18:00:00'),
(43, 2, '2018-07-30 08:00:00', '2018-07-30 18:00:00'),
(44, 2, '2018-07-31 08:00:00', '2018-07-31 18:00:00');

--
-- ���� ������ ������� `students`
--

INSERT INTO `students` (`Id`, `Name`) VALUES
(1, 'Andrey'),
(2, 'Vasilisa'),
(3, 'Alex'),
(4, 'Alena'),
(5, 'Alena');

--
-- ���� ������ ������� `student_group_map`
--
INSERT INTO `student_group_map` (`StudentId`, `GroupId`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 2);

--
-- ���� ������ ������� `subjects`
--
INSERT INTO `subjects` (`Id`, `Name`) VALUES
(1, 'Common'),
(2, 'Physics'),
(3, 'Computer science'),
(4, 'Biology');

--
-- ���� ������ ������� `teachers`
--
INSERT INTO `teachers` (`Id`, `Name`) VALUES
(1, 'Petrov Petr'),
(2, 'Ivanov Ivan'),
(3, 'Sidirov Egor');