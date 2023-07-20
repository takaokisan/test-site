CREATE TABLE mails (
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50),
mail VARCHAR(200),
subject VARCHAR(200),
text TEXT,
time VARCHAR(20));

GRANT ALL ON testdb.*TO 'LAA1542338'@'mysql215.phy.lolipop.jp'
IDENTIFIED BY 'chani1003';

ALTER TABLE mails
 ADD status int not null;
