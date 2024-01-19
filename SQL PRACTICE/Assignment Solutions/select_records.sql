use demo_staff_db;
-- SOLUTION 1: Get list of departments along with the name of the HOD

SELECT dp.name as Department,dp.description as Description, CONCAT(st.firstname,' ',st.lastname) as 'HOD' from department dp
    LEFT JOIN staff st on dp.HOD = st.ID;

-- SOLUTION 2: Get the staff with the highest and lowest salary
SELECT firstname, lastname, current_salary,
    CASE 
        WHEN current_salary = (SELECT MIN(current_salary) from staff) THEN  'Lowest Paid'  
        WHEN current_salary = (SELECT MAX(current_salary) from staff) THEN 'Highest Paid'
    END
    as `salary Rank`
    FROM staff
    WHERE current_salary = (SELECT MIN(current_salary) from staff)
    OR current_salary = (SELECT MAX(current_salary) FROM staff) 
;

-- SOUTION 3: Get an estimate of total amount required to service the salary payment of all staff for every month by the management
SELECT count(ID) AS 'Staff Count', sum(current_salary) as 'Monthly Salary Estimate'
    FROM staff;

-- SOLUTION 4: Get the name, phone and email of all HOD staff
SELECT firstname,middlename,lastname,phone,email, d.name as Department FROM staff,department d
    WHERE staff.ID = d.HOD;