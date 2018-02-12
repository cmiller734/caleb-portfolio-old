USE cjz89;
DROP TABLE IF EXISTS guestbook;
CREATE TABLE guestbook (
	guestID INT PRIMARY KEY AUTO_INCREMENT,
	name TEXT,
	location VARCHAR(100),
	email VARCHAR(100),
	comments TEXT
	);
 -- ----------------------------NOT UTILIZED FOR ENHANCED GUESTBOOK ASSIGNMENT---------------------------
 -- LOAD DATA INFILE '../../htdocs/data/guestbook.txt' 
 --	INTO TABLE guestbook 
 --	FIELDS TERMINATED BY '|'
 --  (name, location, email, comments);
 --  SELECT * FROM guestbook;