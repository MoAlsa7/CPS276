CREATE TABLE admins
(
  id            int          NOT NULL AUTO_INCREMENT,
  name      varchar(140)  NULL ,
  email     varchar(45)   NULL ,
  password  varchar(140)  NULL ,
  status    varchar(45)   NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

INSERT INTO admin(name, email, password, status)
VALUES ('Mo Alsaman', 'maalsaman@staff.com', '$2y$10$K2N8w0yf37sWlRI5yri5ceM8DWSvGjybsFkQHPqVCgW.cox5V2q/C', 'staff');