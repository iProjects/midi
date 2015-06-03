DROP TABLE IF EXISTS authors;
CREATE TABLE authors (
  id BIGINT NOT NULL PRIMARY KEY auto_increment,
  name VARCHAR(255) NOT NULL
);

DROP TABLE IF EXISTS books;
CREATE TABLE books (
  id BIGINT NOT NULL PRIMARY KEY auto_increment,
  author_id INT NOT NULL,
  name VARCHAR(255) NOT NULL
);

INSERT INTO authors VALUES ( 0, 'Jack Herrington' );
INSERT INTO authors VALUES ( 0, 'Dave Smith' );
INSERT INTO authors VALUES ( 0, 'Harold Rollins' );

INSERT INTO books VALUES ( 0, 1, 'Code Generation In Action' );
INSERT INTO books VALUES ( 0, 1, 'Podcasting Hacks' );
INSERT INTO books VALUES ( 0, 2, 'Welcome To The Universe' );
