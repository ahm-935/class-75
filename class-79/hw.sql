drop table if exists positions;
create table if not exists positions(
     id int unsigned primary key auto_increment,
     position_name varchar(100)
     );
insert into positions(position_name) 
values('Manager'),
('Developer'),
('Tester'),
('HR');

drop table if exists employees;
CREATE TABLE IF NOT EXISTS employees (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    position_id INT UNSIGNED,
    salary DECIMAL(10,2),
    hire_date DATE,
    CONSTRAINT fk_position FOREIGN KEY (position_id) REFERENCES positions(id)
);

insert into employees(name, position_id, salary, hire_date)
values('Hasan', 1, 7500.00, '2020-01-15'),
('Munna', 2, 6000.00, '2019-03-10'),
('Istiak', 3, 5000.00, '2021-06-01'),
('Sam', 4, 4500.00, '2018-11-20');

select * from employees where salary <= 6000.00;


update positions
    set position_name = 'Senior Developer'
    where id = 2;

drop from positions where id = 3;

drop view if exists vw_employee_details;
create view vw_employee_details as
select e.id, e.name, p.position_name, e.salary, e.hire_date
from employees e
join positions p on e.position_id = p.id;
select * from vw_employee_details;    

drop view if exists vw_employee_details;
create view view_employee_details as
select  e.name, p.position_name, e.salary
from employees e
join positions p on e.position_id = p.id;
select * from vw_employee_details; 

delimiter //
create procedure get_employees_by_position (IN pos_name VARCHAR(100))
begin
    select * from vw_employee_details where position_name = pos_name;
end//
delimiter ;
call