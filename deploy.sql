
create database cr;
use cr;
GRANT ALL PRIVILEGES ON cr.* TO myapplication@'%' IDENTIFIED BY 'myapplicationpassword';
create table users ( login VARCHAR(50) not null  primary key , password VARCHAR(50));



INSERT INTO `users` (login,password) VALUES ('admin','4140aab137dc787b96ca20206d689fad');

