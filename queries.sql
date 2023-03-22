create database employersDetails;

use userdatas;

create table employees(
id int AUTO_INCREMENT,
name varchar(255),
lastName varchar(255),
mail varchar(255),
website varchar(255),
address varchar(255),
gender varchar(255),
username varchar(255),
passwod varchar(255),
primary key(id)
)