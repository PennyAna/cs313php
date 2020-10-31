#create table for scriptures
CREATE TABLE scripture (
    id SERIAL PRIMARY KEY NOT NULL, 
    book VARCHAR(80) NOT NULL, 
    chapter INT NOT NULL,
    verse INT NOT NULL,  
    content VARCHAR(4000) NOT NULL
);
#insert data into new TABLE
INSERT INTO scripture(book, chapter, content, verse)
VALUES('John', 1, 'And the light shineth in darkness; and the darkness comprehended it not.', 4);
INSERT INTO scripture(book, chapter, content, verse)
VALUES('Doctrine and Covenants', 93, 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.', 28);
INSERT INTO scripture(book, chapter, content, verse)
VALUES('Mosiah', 16, 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yeah, and also a life which is endless, that there can be no more death.',  9);
INSERT INTO scripture(book, chapter, content, verse)
VALUES('Doctrine and Covenants', 88, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.', 49);

CREATE USER ta_user WITH PASSWORD 'ta_pass';
GRANT SELECT, INSERT, UPDATE ON scripture TO ta_user;