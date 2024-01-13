-- POSITIONAL INSERTION
INSERT INTO users 
    VALUES
    (NULL,'Johnson',Null,'Nduka','john@gmail.com','09012345678','john',MD5('12345678'),NOW(),NOW()),
    (NULL,'John',Null,'Cena','johncena@gmail.com','09012345678','cena',MD5('helloworld'),NOW(),NOW());


-- UNORDERED INSERTION
INSERT INTO users
    (`first_name`,`middle_name`,`last_name`,email,phone,username,`password`)
    VALUES
        ('Michael',Null,'Adenuga','michaelade@gmail.com','08012345387','michael',MD5('12345')),
        ('Ramadan','Afolabi','Sauladen','ramadan@gmail.com','0801298756','ramadan',MD5('12345')),
        ('Blessing','Ujunwa','Chijioke','blessing@gmail.com','07148479957','blessing',MD5('12345'));