#create table for scriptures
CREATE TABLE scripture (
    id SERIAL PRIMARY KEY NOT NULL, 
    book VARCHAR(80) NOT NULL, 
    chapter INT NOT NULL, 
    content VARCHAR(4000) NOT NULL
);
#insert data into new TABLE
INSERT INTO scripture(book, chapter, verse, content)
VALUES('John', 1, 4, 'And the light shineth in darkness; and the darkness comprehended it not.');
INSERT INTO scripture(book, chapter, verse, content)
VALUES('Doctrine and Covenants', 93, 28, 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.');
INSERT INTO scripture(book, chapter, verse, content)
VALUES('Mosiah', 16, 9, 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yeah, and also a life which is endless, that there can be no more death.');
INSERT INTO scripture(book, chapter, verse, content)
VALUES('Doctrine and Covenants', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall ocme when you shall comprehend even God, being quickened in him and by him.');