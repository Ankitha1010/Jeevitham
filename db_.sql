use db;

create table agent(
Name varchar(50) not null,
mobile int primary key,
email varchar(100) not null,
pwd varchar(20) not null,
address varchar(255) not null,
city varchar(30) not null,
dob date not null,
longi varchar(5) not null,
lati varchar(5) not null,
modd varchar(10) not null
);

select * from agent;