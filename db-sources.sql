-- Nama Databasenya magazineDB

CREATE TABLE daftar(
	username varchar(20) PRIMARY KEY NOT NULL,
	fname varchar(20),
	lname varchar(20),
	email varchar(50),
	psswrd varchar(50)
);

CREATE TABLE ipman(
	judul varchar(100) PRIMARY KEY NOT NULL,
	subjudul varchar(100),
	waktu text,
	kalimatPendek varchar(900)
);

CREATE TABLE naruto(
	judul varchar(100) PRIMARY KEY NOT NULL,
	subjudul varchar(100),
	waktu text,
	kalimatPendek varchar(900)
);

CREATE TABLE spongebob(
	judul varchar(100) PRIMARY KEY NOT NULL,
	subjudul varchar(100),
	waktu text,
	kalimatPendek varchar(900)
);

CREATE TABLE boboiboy(
	judul varchar(100) PRIMARY KEY NOT NULL,
	subjudul varchar(100),
	waktu text,
	kalimatPendek varchar(900)
);

CREATE TABLE harrypotter(
	judul varchar(100) PRIMARY KEY NOT NULL,
	subjudul varchar(100),
	waktu text,
	kalimatPendek varchar(990)
);

CREATE TABLE rate(
	nomor serial PRIMARY KEY NOT NULL,
	fname varchar(20),
	lname varchar(20),
	username varchar(20),
	filmname text,
	score text,
	opinion text
);

ALTER TABLE rate ADD FOREIGN KEY (username) REFERENCES daftar(username);

-- Isi Table

INSERT INTO ipman VALUES('Ip Man 2008','Fighting/Martial Arts','1 h 46 m','Ip Man is a 2008 Hong Kong martial arts action film directed by Wilson Yip from a script by Edmond Wong. The film was released by Mandarin Films Distribution in Hong Kong and Cathay-Keris Films in Singapore.'),('Ip Man 2 2010','Action/Drama','1h 49 m','In this film inspired by a true story, Wing Chun martial arts master Ip Man (Donnie Yen) and his family are moving from Foshan, China, to Hong Kong, where Ip aspires to create a school so that he may teach his fighting techniques to a new generation.'),
('Ip Man 3 2015','Action/Martial Arts','1h 45m','Ip Man must help the police guard his son is school from a corrupt property developer. In the meantime, he has to look after his terminally ill wife and defend his title.'),
('Ip Man 4 The Finale 2019','Action/Martial Arts','1h 44m','Ip Man and his son encounter racial discrimination after travelling to the United States to seek a better life.');

INSERT INTO naruto VALUES 
('Naruto Eps 1 2002','Action fiction','-','Naruto, a teenage ninja, embarks on various adventures with his friends and trains hard to become the Hokage. However, he must prove his mettle in order to be successful in his quest.'),
('Naruto Eps 2 My Name Is Konohamaru 2002','Action fiction','-','Naruto graduates from the Ninja Academy and meets Konohamaru Sarutobi.'),
('Naruto Eps 3 2002','Action fiction','-','Naruto is put in a team, but has feelings for Sakura who herself has feelings for Sasuke.'),
('Naruto Eps 4 Pass or Fail: Survival Test 2002','Action fiction','-','Naruto, Sasuke and Sakura meet with their sensei who will decide whether they can become Genin.');

INSERT INTO spongebob VALUES 
('Spongebob Squarepants: Broken Alarm/Karen is Baby','Cartoon/animation','-','SpongeBob breaks his precious alarm clock, but nothing else is loud enough to wake him up on time; Old Man Jenkins disrupts business as usual at the Krusty Krab, but Mr. Krabs cannot find a way to kick him out.'),
('
Spongebob Squarepants: Sandy is Nutty Nieces/Insecurity Guards
','Cartoon/animation','-','SpongeBob agrees to babysit Sandy is three nieces without realising the hell he has got himself into; SpongeBob and Patrick volunteer as guards at the museum, while Squidward attempts to hang his painting unnoticed.'),
('Spongebob Squarepants: Squirrel Jelly/The String','Cartoon/animation','-','SpongeBob and Patrick are disturbed by Sandy is competitive nature during their peaceful day of jelly fishing; when SpongeBob tries to help Squidward, he pulls a loose string from his shirt that never seems to end.'),
('Spongebob Squarepants: Cave Dwelling Sponge','Cartoon animation','-','When a prehistoric sponge is unfrozen, he causes chaos all over town, and only SpongeBob can communicate with him. When a flock of clams descend on Bikini Bottom, SpongeBob has to get them out before they ruin the whole town.');

INSERT INTO harrypotter VALUES 
('Harry Potter and the Philosopher is Stone','Fantasy/Family','2h 32m','Late one night, Albus Dumbledore and Minerva McGonagall, professors at Hogwarts School of Witchcraft and Wizardry, along with groundskeeper Rubeus Hagrid, deliver an orphaned infant named Harry Potter to his aunt and uncle, Petunia and Vernon Dursley, his only living relatives.'),
('Harry Potter and the Prisoner of Azkaban','Fantasy/Family','2h 22m','is a fantasy novel written by British author J. K. Rowling and is the third in the Harry Potter series. The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry.'),
('Harry Potter and the Chamber of Secrets','Fantasy/Family','2h 41m','Spending the summer with the Dursleys, Harry Potter meets Dobby, a house-elf who warns him that it is too dangerous to return to Hogwarts. Dobby sabotages an important dinner for the Dursleys, who lock up Harry to prevent his return to Hogwarts.'),
('Harry Potter and the Goblet of Fire','Fantasy/Adventure',' 2h 37m','BoBoiBoy has just moved and is now living with his grandfather, Tok Aba, to help assist him at his cocoa shop. There, he becomes acquainted with his new friends namely Gopal, Yaya, and Ying. Meanwhile, an alien named Adu Du got to know the Tok Aba is cocoa is the strongest power source.');

