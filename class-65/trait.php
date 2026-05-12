<?php
trait Calculate{
    public function add($a, $b){
        return $a + $b;
    }
    public function sub($a, $b){
        return $a - $b;
    }
    public function mul($a, $b){
        return $a * $b;
    }
    public function div($a, $b){
        return $a / $b;
    }
}
trait Operation{
    public function power($a, $b){
        return $a ** $b;
    }
    public function mod($a, $b){
        return $a % $b;
    }
}

class Result{
    use Calculate, Operation;
    // Use Operation;
    public $num1;
    public $num2;
}
$result = new Result();
echo $result->add(10, 20) . "<br>";
echo $result->sub(10, 20) . "<br>";
echo $result->mul(10, 20) . "<br>";
echo $result->div(10, 20) . "<br>";
echo $result->power(10, 2) . "<br>";
echo $result->mod(10, 20) . "<br>";


 

?>