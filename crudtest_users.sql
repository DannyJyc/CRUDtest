CREATE TABLE users
(
  id         INT AUTO_INCREMENT
    PRIMARY KEY,
  username   CHAR(20) NOT NULL,
  password   CHAR(20) NOT NULL,
  sex        CHAR     NULL,
  age        TINYINT  NULL,
  birthday   DATE     NULL,
  hobby      CHAR(20) NULL,
  add_time   DATE     NULL,
  last_login DATE     NULL,
  profile    CHAR(20) NULL
);
INSERT INTO crudtest.users (username, password, sex, age, birthday, hobby, add_time, last_login, profile)
VALUES ('111', '222', '1', 12, '2017-07-10', 'fuxc', '2017-07-22', '2017-07-22', '1');
INSERT INTO crudtest.users (username, password, sex, age, birthday, hobby, add_time, last_login, profile)
VALUES ('222', '222', '1', 12, '2017-07-10', 'fuxc', '2017-07-22', '2017-07-22', '2');
INSERT INTO crudtest.users (username, password, sex, age, birthday, hobby, add_time, last_login, profile)
VALUES ('333', '222', '1', 12, '2017-07-10', 'fuxc', '2017-07-22', '2017-07-22', '3');
INSERT INTO crudtest.users (username, password, sex, age, birthday, hobby, add_time, last_login, profile)
VALUES ('444', '222', '1', 12, '2017-07-10', 'fuxc', '2017-07-22', '2017-07-22', '4');
INSERT INTO crudtest.users (username, password, sex, age, birthday, hobby, add_time, last_login, profile)
VALUES ('555', '222', '1', 12, '2017-07-10', 'fuxc', '2017-07-22', '2017-07-22', '5');
INSERT INTO crudtest.users (username, password, sex, age, birthday, hobby, add_time, last_login, profile)
VALUES ('666', '222', '1', 12, '2017-07-10', 'fuxc', '2017-07-22', '2017-07-22', '6');
INSERT INTO crudtest.users (username, password, sex, age, birthday, hobby, add_time, last_login, profile)
VALUES ('7', '222', '1', 12, '2017-07-10', 'fuxc', '2017-07-22', '2017-07-22', '7');
INSERT INTO crudtest.users (username, password, sex, age, birthday, hobby, add_time, last_login, profile)
VALUES ('8', '222', '1', 12, '2017-07-10', 'fuxc', '2017-07-22', '2017-07-22', '8');
INSERT INTO crudtest.users (username, password, sex, age, birthday, hobby, add_time, last_login, profile)
VALUES ('9', '222', '1', 12, '2017-07-10', 'fuxc', '2017-07-22', '2017-07-22', '9');
INSERT INTO crudtest.users (username, password, sex, age, birthday, hobby, add_time, last_login, profile)
VALUES ('10', '222', '1', 12, '2017-07-10', 'fuxc', '2017-07-22', '2017-07-22', '10');
INSERT INTO crudtest.users (username, password, sex, age, birthday, hobby, add_time, last_login, profile)
VALUES ('666', '666', '2', 66, '1986-06-06', '666', '2017-07-22', '2017-07-22', '6666');
INSERT INTO crudtest.users (username, password, sex, age, birthday, hobby, add_time, last_login, profile)
VALUES ('777', '777', '2', 77, '1987-07-07', '7777', '2017-07-22', '2017-07-22', '77777');