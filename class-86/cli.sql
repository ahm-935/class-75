drop table if exists manufacturers;
create table manufacturers (
  id int auto_increment primary key,
  name varchar(50),
  address varchar(100),
  contact_no varchar(50)
);
drop table if exists products;
create table products (
  id int auto_increment primary key,
  name varchar(50),
  price int(5),
  manufacturer_id int(10)
);

insert into manufacturers (name, address, contact_no) 
values("HP", "USA", "1234567890"),("Dell", "UK", "0987654321");

insert into products (name, price, manufacturer_id)
values("Laptop", 80000, 1), ("Monitor", 10000, 1), ("Laptop", 99000, 2), ("Speaker", 5500, 2);

drop procedure if exists addManufacturer;
delimiter //
CREATE PROCEDURE addManufacturer(pname varchar(50), paddress varchar(100), pcontact_no varchar(50))
BEGIN
    insert into manufacturers(name, address, contact_no) values(pname, paddress, pcontact_no);
END //
delimiter ;

drop view if exists vw_product_list;
create view vw_product_list as
select p.id, p.name, p.price, m.name as manufacturer_name, m.address, m.contact_no
from products p, manufacturers m
where p.manufacturer_id = m.id and p.price > 5000;

drop trigger if exists delete_manufacturer;
create trigger delete_manufacturer
after delete on manufacturers
for each row
delete from products where manufacturer_id = old.id;
