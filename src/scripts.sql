CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usertitle VARCHAR(50) NOT NULL,
    token VARCHAR(60) NOT NULL,
    username VARCHAR(50) NOT NULL,
    userlastname VARCHAR(80) NOT NULL,
    userbyear INT(4) NOT NULL,
    userbmonth VARCHAR(9) NOT NULL,
    userbday INT(2) NOT NULL,
    useremail VARCHAR(80) NOT NULL,
    userphone VARCHAR(16) NOT NULL,
    userbuzz INT(10) NULL,
    userunit INT(6) NULL,
    userbuildingno VARCHAR(12) NOT NULL,
    userstreet VARCHAR(100) NOT NULL,
    usercity VARCHAR(60) NOT NULL,
    userpostalcode VARCHAR(7) NOT NULL,
    userpass VARCHAR(30) NOT NULL UNIQUE,
    registeredat TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    isconfirmed INT(1) NOT NULL,
    isactive INT(1) NOT NULL,
    ip VARCHAR(20) NULL,
    comment VARCHAR(200) NULL
);




