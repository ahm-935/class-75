use evidence;
drop table if exists manufacturer;
create table manufacturer(
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
insert into manufacturer (name, address, contact_no) 
values("HP", "USA", "1234567890"),("Dell", "UK", "0987654321");

insert into manufacturer (name, address, contact_no) 
values("Nokia", "Finland", "8765789");

insert into products (name, price, manufacturer_id)
values("Laptop", 80000, 1), ("Monitor", 10000, 1), ("Laptop", 99000, 2), ("Speaker", 5500, 2);

insert into products (name, price, manufacturer_id)
values("Nokia 105", 2200, 3), ("Nokia 3310", 4000, 3);

drop procedure if exists addManufacturer;
delimiter //
CREATE PROCEDURE addManufacturer(pname varchar(50), paddress varchar(100), pcontact_no varchar(50))
BEGIN
    insert into manufacturer(name, address, contact_no) values(pname, paddress, pcontact_no);
END //
delimiter ;

drop view if exists vw_product;
create view vw_product as
select p.id, p.name, p.price, m.name as manufacturer_name, m.address, m.contact_no
from products p, manufacturer m
where p.manufacturer_id = m.id and p.price > 5000;

drop trigger if exists delete_mfg;
create trigger delete_mfg
after delete on manufacturer
for each row
delete from products where manufacturer_id = old.id;