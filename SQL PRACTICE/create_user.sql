-- Sometimes you may wish to connect to a specific database,
-- You can do this by using the following SQL code below

USE demo_blogdb; -- Uncomment this line to connect a specific database

CREATE TABLE  IF NOT EXISTS users (
    id int(5) AUTO_INCREMENT NOT NULL,
    name varchar(20),
    PRIMARY KEY(id)
);