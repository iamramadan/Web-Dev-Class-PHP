use demo_staff_db;
CREATE Table IF NOT EXISTS staff (
    ID INT(5) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    firstname VARCHAR(20) NOT NULL,
    middlename VARCHAR(20) NULL,
    lastname VARCHAR(20) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(160) NOT NULL,
    position VARCHAR(50),
    current_salary DOUBLE(15,2) NOT NULL,
    nationality VARCHAR(30) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);