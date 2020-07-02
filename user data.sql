create database `Users1`;
create table `UserData`(`First Name` varchar(10),`Last name` varchar(10),`ID` int(2),
`Mobile number` varchar(20),`Email` varchar(20),`Age` int(3));
alter table `UserData` add primary key(`ID`);