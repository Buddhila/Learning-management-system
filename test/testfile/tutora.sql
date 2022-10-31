create database tutora;
use tutora;

create table user_d(
 user_id integer,
 full_name varchar(50),
 email varchar(30),
 password varchar(8),
 country varchar(20),
 account_details integer,
 constraint user_pk primary key (user_id)
 )

 create table Sc_Stu (
  stu_id integer,
  user_id integer,
  full_name varchar(50),
 email varchar(30),
 address varchar (50),
 DoB date,
 country varchar(20),
 zipcode integer,
 select_course varchar(50),
 account_details integer,
constraint SC_stu_pk primary key (stu_id),
constraint Sc_stu_fk foreign key (user_id) references user_d(user_id) 
)

create table deg_Stu (
  dstu_id integer,
  user_id integer,
  full_name varchar(50),
 email varchar(30),
 address varchar (50),
 DoB date,
 country varchar(20),
 zipcode integer,
 select_course varchar(50),
 account_details integer,
constraint dg_stu_pk primary key (dstu_id),
constraint dg_stu_fk foreign key (user_id) references user_d(user_id) 
)

create table Lecture(
 lec_id integer,
 full_name varchar(50),
 email varchar(30),
 password varchar(8),
 country varchar(20),
 constraint lecture_pk primary key (lec_id)
 )