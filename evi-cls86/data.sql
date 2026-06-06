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