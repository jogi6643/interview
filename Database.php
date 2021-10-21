 SELECT name,salary FROM emp as e1 where 3-1 = (SELECT COUNT(DISTINCT salary) from emp as e2 where e2.salary>e1.salary)


 SELECT MAX(salary) FROM employee where salary< (SELECT MAX(salary) FROM employee WHERE salary<(SELECT MAX(salary) FROM employee))