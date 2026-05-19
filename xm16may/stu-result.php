<?php
$arr = [
    "Asif"    => 100,
    "Ali"     => 90,
    "Usman"   => 80,
    "Tanveer" => 70,
    "Ahmed"   => 60
];
if (isset($_POST['Student_ID'])) {
    $Id = $_POST['Student_ID'];
    $student = new Student($Id);
    $msg = $student->result($Id);
}

class Student
{
    public $name;
    public $result;

    public function __construct($name, $result="")
    {
        $this->name = $name;
        $this->result = $result;
    }
    public function result($name){
        global $arr;
        $message = "";
        foreach ($arr as $item => $score) {
            if ($item == $name) {
                $message .= "Name: " . $item . "<br>";
                $message .= "Score: " . $score . "<br>";
                return $message;
            }
            
        }
    }
    
}
$maxScore = max($arr);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
    <form action="" method="POST">
        <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse;">
            <tr>
                <th>Student Name</th>
                <th>Score</th>
            </tr>
            <tr>
                <td>
                    Asif
                </td>
                <td>
                    100
                </td>
            </tr>
            <tr>
                <td>
                    Ali
                </td>
                <td>
                    90
                </td>
            </tr>
            <tr>
                <td>
                    Usman
                </td>
                <td>
                    80
                </td>
            </tr>
            <tr>
                <td>
                    Tanveer
                </td>
                <td>
                    70
                </td>
            </tr>
            <tr>
                <td>
                    Ahmed
                </td>
                <td>
                    60
                </td>
            </tr>

        </table>
    </form>
    <p>
        <?php
        if (isset($message)) {
            echo $message;
        }
        ?>
    </p>
    <h3> Maximum Score: <?php echo $maxScore; ?></h3>
    <h3> Student Name: <?php echo array_search($maxScore, $arr); ?></h3>

</body>

</html>