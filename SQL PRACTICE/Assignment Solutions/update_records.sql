use demo_staff_db;

-- Upgrade all staff with salary range of 10,000 - 20,000 to be on same salary scale
-- Their salary should be increased to a flat rate of 50,000

UPDATE staff SET current_salary = 50000
    WHERE current_salary BETWEEN 10000 AND 20000;


-- Increase staff salary by 45% For all staff with salary range of 1000 - 3000

UPDATE staff set current_salary = 145/100*current_salary
    WHERE current_salary BETWEEN 1000 and 3000;

-- update only 2 random staff record earning 50000 by reducing their current_salary by 70%
UPDATE staff set current_salary = 0.3*current_salary
    WHERE ID IN (SELECT `ID` FROM staff WHERE current_salary = 50000 LIMIT 2);

-- Update the record of the with id  2 who is currently a clerk with the following details
-- new position: Sales Personel
-- Nationality: India
-- New salary: 145,000
UPDATE staff set position = "Sales Personnel",current_salary=145000,nationality="India"
    WHERE ID = 2 and position = 'clerk';