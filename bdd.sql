CREATE DATABASE ecoweb;

CREATE TABLE admin (
	id INT NOT NULL AUTO_INCREMENT,
  	name VARCHAR(255) NOT NULL,
  	username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)

