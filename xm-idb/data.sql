drop table if exists manufacturer;
create table manufacturer(
  id int auto_increment primary key,
  name varchar(50),
  address varchar(100),
  contact_no varchar(50)
);
drop table if exists product;
create table product (
  id int auto_increment primary key,
  product_name varchar(50),
  price int(5),
  manufacturer_id int(10)
);
insert into manufacturer (name, address, contact_no)
values("Bajaj", "India", "1234567890"), ("Honda", "USA", "9876543210"),
("Yamaha", "Japan", "8765432109"), ("Nokia", "Finland", "5555555555");

insert into product (product_name, price, manufacturer_id)
values("Pulsar", 150000, 1), ("CBR", 200000, 2), ("R15", 250000, 3),
("CBR", 300000, 2), ("Ninja", 350000, 3), ("R15V3", 400000, 1),
 ("Duke", 450000, 1), ("Hornet", 500000, 2), ("FZ", 550000, 3),
 ("Avenger", 600000, 1), ("CB500X", 650000, 2), ("MT-15", 700000, 3),
 ("Nokia 3310", 3000, 4), ("Nokia 1100", 2000, 4), ("Nokia 105", 1500, 4);

drop procedure if exists addManufacturer;
delimiter //
CREATE PROCEDURE addManufacturer(mname varchar(50), maddress varchar(100), mcontact_no varchar(20))
BEGIN
  insert into manufacturer (name, address, contact_no)
  values(mname, maddress, mcontact_no);
END //
delimiter ;

drop trigger if exists dlt_manufacturer;
create trigger dlt_manufacturer
after delete on manufacturer
for each row
delete from product where manufacturer_id = old.id;

drop view if exists vw_product;
create view vw_product as
select p.id, p.name, m.name, p.price, m.address, m.contact_no
from product p, manufacturer m
where p.manufacturer_id = m.id and p.price > 5000;