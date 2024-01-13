SELECT CONCAT(first_name,' ', last_name) as fullname, username, phone, email
    FROM users LIMIT 100;
-- Count Number of records in the database
SELECT count(*) FROM users LIMIT 100

-- GET 10 RECORDS FROM THE DATBASE STARTING FROM THE 4TH RECORD
SELECT * FROM users LIMIT 10 OFFSET 3;

SELECT * FROM users LIMIT 3,10 -- tHIS IS SIMILAR TO THE CODE ABOVE

-- Get only the username and password fields of all users limited to just 100 records
SELECT username, password FROM users LIMIT 100

-- get 100 records latest records sorted by the created_at column
SELECT * FROM users ORDER BY `created_at` DESC LIMIT 100;

-- Get all records sorted by the last_name column in ascending order (A-Z)
SELECT * FROM users ORDER BY last_name ASC 

-- WHERE CLAUSE

-- Get all users with the id of 4 and 1
SELECT * FROM users WHERE id in(4,1)

-- Get all records that where updated between 1st Dec 2023 and 12th Jan 2024
SELECT * FROM users WHERE `updated_at` BETWEEN '2023-12-01' and '2024-01-08' LIMIT 100

-- Search for a certain string within the first_name, middle_name, last_name, username column of the user TABLE
SELECT * FROM users WHERE username LIKE '%jo%' OR 
	`first_name` LIKE  '%jo%' OR
    `last_name` LIKE  '%jo%' OR
    `middle_name` LIKE  '%jo%'
    LIMIT 100

-- Get records from Multiple tables using ALIAS
SELECT u.`first_name`,u.username,u.phone,u.email,um.meta_key as info_key, um.meta_value as info_data 
	FROM users u, user_meta um 
    WHERE u.id = um.user_id
    LIMIT 100

-- LEFT jOIN a table to another table
SELECT u.`first_name`,u.username,u.phone,u.email,um.meta_key as info_key, um.meta_value as info_data 
	FROM users u
    LEFT JOIN user_meta um ON u.id = um.user_id
    LIMIT 100

-- Get some fields from user record and add more fileds from the matching values in user_meta record to each user row
SELECT u.`first_name`,u.username,u.phone,u.email, 
	(SELECT meta_value FROM `user_meta` WHERE `user_id` = u.id and `meta_key` = 'dob') as birth_day,
    (SELECT meta_value FROM `user_meta` WHERE `user_id` = u.id and `meta_key` = 'Nationality') as nationality
    FROM users u
    LIMIT 100