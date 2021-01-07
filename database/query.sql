                                 -- create user info table
CREATE TABLE tdl_userinfo (
                           id int(5) auto_increment primary key,
                           name varchar(10) not null ,
                           email varchar(15) not null,
                           username varchar(15) not null,
                           password varchar(15) not null,
                           pic varchar(50) not null,
                           num int(12) not null
                           ); 

                           -- create table for todo list element 

CREATE TABLE tdl_element(
                        id int(5) auto_increment primary key,   
  						title varchar(50),
                        description varchar(100),
                        imp bool,
                        notify bool 
                           );             

                           -- create table for no of assignment rows and columbs              
CREATE TABLE tdl_assignment_no(
                        id int(5) auto_increment primary key,   
  						subno int(10) not null,
                        assignmentno int(10) not null
                           ); 

                           -- create table for subject name 

CREATE TABLE tdl_assignment_name(
                        id int(5) auto_increment primary key,   
  						subname varchar(15) not null
                           ); 