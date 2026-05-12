<?php
if (isset($_POST['check'])) {
    $num = intval($_POST['number']);

    function isPrime($num)
    {
        if ($num <= 1) return false;
        if ($num <= 3) return true;
        if ($num % 2 == 0 || $num % 3 == 0) return false;

        
        for ($i = 5; $i * $i <= $num; $i += 6) {
            if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
        }
        return true;
    }

    if (isPrime($num)) {
        echo "<h3><strong>$num</strong> is a prime number! </h3>";
    } else {
        echo "<h3><strong>$num</strong> is NOT a prime number. </h3>";
    }
}
?>


<body>
    <h2>Check if a Number is Prime</h2>

    
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit" name="check">Check Number</button>
    </form>
</body>
