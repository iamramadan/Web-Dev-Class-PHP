CREATE TABLE IF NOT EXISTS user_meta(
    id int(5) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_id int(5) NOT NULL,
    meta_key VARCHAR(30) NOT NULL,
    meta_value TEXT NOT NULL
);