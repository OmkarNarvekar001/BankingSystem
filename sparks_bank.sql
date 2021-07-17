-- Table structure for table `transaction`
CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) 

-- Inserting data for table `transaction`
INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(2, 'Riddhi', 'Shivam', 9000, '2021-05-02 18:28:06'),
(3, 'Omkar', 'Aman', 25000 '2021-05-18 10:15:43'),
(4, 'Juhi', 'Priya', 3000, '2021-05-10 07:29:34');

-- Table structure for table `users`
CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
)

-- Dumping data for table `users`
INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Omkar', 'omkar@gmail.com', 52000),
(2, 'Riddhi', 'riddhu5@gmail.com', 30858),
(3, 'Nimesh', 'nimehshah@yahoo.com', 36030),
(4, 'Priya', 'priya12@gmail.com', 10876),
(5, 'Shivam', 'shivam@yahoo.com', 40000),
(6, 'Ravi', 'singhravi@gmail.com', 19923);
(7, 'Deepak', 'deepak90@hotmail.com', 51961)
(8, 'Juhi', 'sharmajuhi99@gmail.com', 80105),
(9, 'Aman', 'aman88@yahoo.com', 21897),
(10, 'Varun', 'varun67634@gmail.com', 52067);


ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

-- Creattion of new column (Account opening date) in Users table 
ALTER TABLE `users`
ADD COLUMN `accodate` date NOT NULL After `balance`;

-- Insert value in acount opening date field
update users set accodate='2021-03-18' where id=1;
update users set accodate='2021-01-01' where id=2;
update users set accodate='2021-04-05' where id=3;
update users set accodate='2021-06-10' where id=4;
update users set accodate='2021-04-30' where id=5;
update users set accodate='2021-02-22' where id=6;
update users set accodate='2021-05-11' where id=7;
update users set accodate='2021-03-07' where id=8;
update users set accodate='2021-02-09' where id=9;
update users set accodate='2021-01-26' where id=10;

