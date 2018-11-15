CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usertitle VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    userlastname VARCHAR(80) NOT NULL,
    userbirthyear INT(4) NOT NULL,
    userbirthmonth VARCHAR(9) NOT NULL,
    userbirthday INT(2) NOT NULL,
    useremail VARCHAR(80) NOT NULL,
    userbuzz INT(10) NULL,
    userbuildingno VARCHAR(12) NOT NULL,
    userstreet VARCHAR(100) NOT NULL,
    userpostal VARCHAR(7) NOT NULL,
    userpassword VARCHAR(80) NOT NULL UNIQUE,
    joinedat DATETIME DEFAULT CURRENT_TIMESTAMP
    isactive INT(1) NOT NULL,
);