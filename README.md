# leetUNLOCKED

1 start xampp
2 Extract leetUNLOCKED subfiles inside C:/xampp/htdocs/.. 
3 Open CMD
4 Run mysql -u root
5 Create a db named leetcode by
  - CREATE DATABASE leetcode;
6 Use DB by
  - USE leetcode;
7 Create a table named login
  - CREATE TABLE login (id int primary key auto_increment not null,username varchar(50) unique not null,password varchar(50) not null, email varchar(50) not null);
8 INSERT a admin into table
  - INSERT INTO login (1,"admin","admin","admin@admin.com");
  
# LOGIN BY OPENING localhost:<APACHE PORT XAMPP IS USING> eg localhost:8000
 1 Username: admin
 2 Password: admin
 
 Tada!! You got it!
