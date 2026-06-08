<?php
require_once 'config.php';

$sql = "SELECT count(*) as stu_num from students where address = 'Rangpur'";;
$sql = "SELECT sum(score) as total_score from results where student_id = 1";
$sql = "SELECT sum(score) as total_score from results where exam-type = 'Final'";
$sql = "SELECT max(score) as Highest_mark, student_id, full_name as student_name  from results , students where student_id = student_id";
$sql = "
SELECT r.student_id, s.full_name as stu_name,
min(r.score) as lowest_mark  
from results r, students s 
where r.student_id = s.id
";
$sql = "
select p.name, min(p.price) as min_price, m.name as MFG 
from products p, manufacturers m 
where p.manufacturer_id = m.id
";
// Find the student who got the lowest score
$sql = "
select r.student_id, s.full_name as stu_name,
r.score  
from results r, students s 
where r.student_id = s.id and r.score = (select min(score) from results)
";
$sql = "
select avg(score) from results where exam_type = 'Final'
";
$sql = "
select exam_type, avg(score) as avg from results group by exam_type order by avg
";

$sql = "
select count(*) as num_of_products, m.name 
from products p, manufacturers m 
where p.manufacturer_id = m.id group by m.name
";
?>