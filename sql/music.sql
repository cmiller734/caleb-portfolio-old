-- --------------------------------------------------CREATE TABLES-----------------------------------
-- This table has been optimized for use within the XAMPP MYSQL server ------------------------------
USE id2083802_cjz89;
-- 1. drop the tables if they exist. Ordered to work with deletion of foreign keys
DROP TABLE IF EXISTS track;
DROP TABLE IF EXISTS album;
DROP TABLE IF EXISTS artist;
DROP TABLE IF EXISTS genre;

-- 2. Create tables. All primary keys -> not null, autoincrement

CREATE TABLE artist (
	artistID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name TEXT
);

CREATE TABLE genre (
	genreID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name TEXT,
	genre_description VARCHAR(100)
);

CREATE TABLE album (
	albumID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
             artistID INTEGER,
             genreID INTEGER,
	title VARCHAR(100),
	track_count INT, 
             release_year INT, 
             rating INT,
             FOREIGN KEY (artistID) REFERENCES artist(artistID),
             FOREIGN KEY (genreID) REFERENCES genre(genreID)
            );

CREATE TABLE track (
	trackID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,	
             albumID INTEGER,
	title VARCHAR(100),
	number INT,
	length TIME,
	rating INT,
             FOREIGN KEY (albumID) REFERENCES album(albumID)
);

INSERT INTO artist
VALUES
	('00001','John Mayer'),
	('00002','Passenger'),
	('00003','The Lumineers'),
	('00004','The Wonder Years');

INSERT INTO genre
VALUES
	('00001','Pop','A broad genre, used to describe middle-of-the-road music that typically appeals to a wide audience'),
	('00002','Folk Pop','This genre encompasses music that utilizes elements of folk, including chord structures and instruments, and elements of pop which give it a more neutral, modern sound that caters to wider audiences'),
	('00003','Pop Punk', 'A genre that has developed recently. Brings a new, poppier, friendlier sound to classic punk chords and riffs');

--  album title, total number of tracks, year of release and album rating (on a scale of 1 to 5)
INSERT INTO album
VALUES
-- John Mayer
	('00001',(SELECT artistID FROM artist WHERE name="John Mayer"),(SELECT genreID FROM genre WHERE name="Pop"),'Heavier Things','10','2003','5'),
-- Passenger
	('00002',(SELECT artistID FROM artist WHERE name="Passenger"),(SELECT genreID FROM genre WHERE name="Folk Pop"),'All the Little Lights','11','2012','4'),
-- The Lumineers
	('00003',(SELECT artistID FROM artist WHERE name="The Lumineers"),(SELECT genreID FROM genre WHERE name="Folk Pop"),'The Lumineers','11','2012','4'),
-- The Wonder Years
	('00004',(SELECT artistID FROM artist WHERE name="The Wonder Years"),(SELECT genreID FROM genre WHERE name="Pop Punk"),'The Upsides','12','2010','3');
	

-- trackID, albumID (fk), track title, track #, length, rating
INSERT INTO track 
VALUES 
-- John Mayer, Heavier Things
	('00001',(SELECT albumID FROM album WHERE title="Heavier Things"),'Clarity','01','04:32','5'),
	('00002',(SELECT albumID FROM album WHERE title="Heavier Things"),'Bigger Than My Body','02','04:27','5'),
	('00003',(SELECT albumID FROM album WHERE title="Heavier Things"),'Somethings Missing','03','05:06','3'),
	('00004',(SELECT albumID FROM album WHERE title="Heavier Things"),'New Deep','04','4:09','2'),
	('00005',(SELECT albumID FROM album WHERE title="Heavier Things"),'Come Back To Bed','05','5:25','3'),
-- Passenger, All The Little Lights
	('00006',(SELECT albumID FROM album WHERE title="All the Little Lights"),'Things That Stop You Dreaming','01','3:35','3'),
	('00007',(SELECT albumID FROM album WHERE title="All the Little Lights"),'Let Her Go','02','4:13','3'),
	('00008',(SELECT albumID FROM album WHERE title="All the Little Lights"),'Staring At The Stars','03','3:25','3'),
	('00009',(SELECT albumID FROM album WHERE title="All the Little Lights"),'All The Little Lights','04','3:56','2'),
	('00010',(SELECT albumID FROM album WHERE title="All the Little Lights"),'The Wrong Direction','05','3:41','2'),
-- The Lumineers, The Lumineers
	('00011',(SELECT albumID FROM album WHERE title="The Lumineers"),'Flowers in Your Hair','01','1:49','2'),
	('00012',(SELECT albumID FROM album WHERE title="The Lumineers"),'Classy Girls','02','2:45','3'),
	('00013',(SELECT albumID FROM album WHERE title="The Lumineers"),'Submarines','03','2:43','2'),
	('00014',(SELECT albumID FROM album WHERE title="The Lumineers"),'Dead Sea','04','4:07','3'),
	('00015',(SELECT albumID FROM album WHERE title="The Lumineers"),'Ho Hey','05','2:43','5'),
-- The Wonder Years, The Upsides
	('00016',(SELECT albumID FROM album WHERE title="The Upsides"),'My Last Semester','01','3:51','4'),
	('00017',(SELECT albumID FROM album WHERE title="The Upsides"),'Logan Circle','02','2:56','3'),
	('00018',(SELECT albumID FROM album WHERE title="The Upsides"),'Everything I Own Fits in This Backpack','03','4:18','5'),
	('00019',(SELECT albumID FROM album WHERE title="The Upsides"),'Dynamite Shovel','04','1:05','2'),
	('00020',(SELECT albumID FROM album WHERE title="The Upsides"),'New Years with Carl Weathers','05','3:11','4');

-- Create a view to help with data retrieval
DROP VIEW IF EXISTS combine;
CREATE VIEW combine AS
SELECT track.title AS track_title, number, album.title AS album_title, artist.name AS artist_name, genre.name AS genre_name, track.rating AS rating
FROM track 
INNER JOIN album ON track.albumID = album.albumID
INNER JOIN artist ON album.artistID = artist.artistID
INNER JOIN genre ON album.genreID = genre.genreID;