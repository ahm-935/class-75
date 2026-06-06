use round_70a;

drop table if exists manufacturers;
create table manufacturers (
  id int auto_increment primary key,
  name varchar(100),
  address varchar(255)
);
drop table if exists products;
create table products (
  id int auto_increment primary key,
  name varchar(100),
  manufacturer_id int,
  price float
);
insert into manufacturers (name, address) 
values("HP", "USA"),("Dell", "UK");

insert into products (name, manufacturer_id, price)
values("Mouse", 1, 800), ("Monitor", 1, 11000), ("Monitor", 2, 9900), ("Speaker", 2 , 5500);

drop procedure if exists createManufacturer;
delimiter //
CREATE PROCEDURE createManufacturer(pname varchar(100), paddress varchar(255))
BEGIN
    insert into manufacturers(name, address) values(pname, paddress);
END //
delimiter ;

-- call createManufacturer("Apple", "USA");

drop view if exists vw_product_list;
create view vw_product_list as
select p.id, p.name, p.price, m.name as mfg
from products as p, manufacturers as m
where p.manufacturer_id = m.id and p.price > 5000;

select * from vw_product_list;

drop trigger if exists delete_mfg;
create trigger delete_mfg 
after delete on manufacturers
for each row
delete from products where manufacturer_id = old.id;