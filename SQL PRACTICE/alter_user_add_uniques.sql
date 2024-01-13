ALTER Table users
    CHANGE `email` `email` VARCHAR(180) UNIQUE NOT NULL,
    CHANGE `phone` `phone` VARCHAR(15) UNIQUE NOT NULL,
    CHANGE `username` `username` VARCHAR(10) UNIQUE NOT NULL;