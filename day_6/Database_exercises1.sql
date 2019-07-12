CREATE TABLE directors
(
	    director_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	    first_name VARCHAR(50),
	    last_name VARCHAR(50),
	    date_of_birth DATE,
	    country VARCHAR(50)
	);
ALTER TABLE movies
ADD directorID INT,
ADD FOREIGN KEY (directorID) REFERENCES directors (director_id);

-- Part 2 :
-- Retrieve the name and the year of birth of each director
-- Recover directors under 50 years old.
-- Recover the directors of American nationality

SELECT CONCAT(first_name, " ", last_name) AS "Name", YEAR(date_of_birth) AS "Year of birth"
FROM directors;

SELECT * FROM directors
WHERE TIMESTAMPDIFF(year, date_of_birth, CURDATE()) < 60;

SELECT * FROM directors
WHERE country = "USA";

-- Part 3:
-- Collect the film that was the least visible at the box office
-- Collect the most popular movie at the box office
-- Collect the 3 most viewed movies at the box office

SELECT * FROM movies
WHERE views = 
		(SELECT MIN(views)
		FROM movies);

SELECT * FROM movies
WHERE views = 
		(SELECT MAX(views)
		FROM movies);

SELECT * FROM movies
ORDER BY views DESC
LIMIT 3;

-- Part 4:
-- For each film, recover its title, its year of release and the name of the director
-- For each film, get all the information about it and the name of the director
-- Get the title of each film and the name of the director, sorted alphabetically on the title of the film.
-- Same but sorted on the director's name.

SELECT m.title, m.release_year, CONCAT(d.first_name, " ", d.last_name) AS "Director Name"
FROM movies m, directors d
WHERE m.directorID = d.director_id;

SELECT m.title, m.release_year, m.views, CONCAT(d.first_name, " ", d.last_name) AS "Director Name"
FROM movies m, directors d
WHERE m.directorID = d.director_id;

SELECT m.title, CONCAT(d.first_name, " ", d.last_name) AS "Director Name"
FROM movies m, directors d
WHERE m.directorID = d.director_id
ORDER BY title;

SELECT m.title, d.first_name, d.last_name
FROM movies m, directors d
WHERE m.directorID = d.director_id
ORDER BY d.last_name, d.first_name;

-- Part 5:
-- Get all the films from the director "George Lucas"
-- Get all the director's films that are not "George Lucas"
-- Collect all films whose director has the letter 's' in his name or first name.

SELECT m.title, d.first_name, d.last_name
FROM movies m, directors d
WHERE m.directorID = d.director_id AND NOT (d.first_name = "George" AND d.last_name = "Lucas");

SELECT m.title, d.first_name, d.last_name
FROM movies m, directors d
WHERE m.directorID = d.director_id AND (d.first_name LIKE "%s%" OR d.last_name LIKE "%s%");

-- Part 6:
-- Get all the movies from the youngest to the oldest director
-- Collect the number of films by director (with the name of the director)

SELECT m.title, CONCAT(d.first_name, " ", d.last_name) AS "Director Name", d.date_of_birth
FROM movies m, directors d
WHERE m.directorID = d.director_id
ORDER BY d.date_of_birth DESC;

SELECT CONCAT(d.first_name, " ", d.last_name) AS "Director Name", COUNT(m.movie_id) AS "Number of movies"
FROM movies m, directors d
WHERE m.directorID = d.director_id
GROUP BY d.director_id
ORDER BY COUNT(m.movie_id) DESC, d.last_name;

-- Part 7:
-- Get the sum of the views of all the films of the director 'George Lucas'
-- Get the sum of views of all movies by director
-- Get average views of all movies by director
-- Get the sum of the views by nationality (of the director)

SELECT CONCAT(d.first_name, " ", d.last_name) AS "Director Name", SUM(m.views) AS "Number of views"
FROM movies m, directors d
WHERE m.directorID = d.director_id AND d.first_name = "George" AND d.last_name = "Lucas";

SELECT CONCAT(d.first_name, " ", d.last_name) AS "Director Name", SUM(m.views) AS "Number of views"
FROM movies m, directors d
WHERE m.directorID = d.director_id
GROUP BY d.director_id
ORDER BY SUM(m.views) DESC;

SELECT CONCAT(d.first_name, " ", d.last_name) AS "Director Name", ROUND(AVG(m.views)) AS "Average Number of views"
FROM movies m, directors d
WHERE m.directorID = d.director_id
GROUP BY d.director_id
ORDER BY ROUND(AVG(m.views)) DESC;

SELECT d.country AS "Director Nationality", SUM(m.views) AS "Number of views"
FROM movies m, directors d
WHERE m.directorID = d.director_id
GROUP BY d.country
ORDER BY SUM(m.views) DESC;

-- Part 8:
-- Get the director who makes the most views.
-- Recover nationalities (director) who made over 200,000 views

SELECT CONCAT(d.first_name, " ", d.last_name) AS "Director Name", m.views
FROM directors d
INNER JOIN movies m ON d.director_id = m.directorID
ORDER BY m.views DESC
LIMIT 1;

SELECT CONCAT(d.first_name, " ", d.last_name) AS "Director Name", m.views
FROM directors d
INNER JOIN movies m ON d.director_id = m.directorID
WHERE m.views > 20000000
ORDER BY m.views DESC;

-- Part 9:
-- All director George Lucas's films have made 20 more box office hits. Update these movies.

UPDATE movies m
INNER JOIN directors d ON d.director_id = m.directorID
SET m.views = m.views + 20000000
WHERE d.first_name = "George" AND d.last_name = "Lucas";

