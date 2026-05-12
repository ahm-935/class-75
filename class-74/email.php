<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <form action="mail-send.php" method="POST">
    <label for="">Email</label><br>    
    <input type="text" name="email" placeholder="Email"><br><br>
    <label for="">Subject</label><br>
    <input type="text" name="subject" placeholder="Subject"><br><br>
    <label for="">Message</label><br>
    <input type="text" name="message" placeholder="Message"><br><br>
    <button type="submit" name="mail">Send Mail</button>
    </form>
    <h3 style="color: green;"><?php echo $_GET['msg'] ?? ''; ?></h3>
</body>
</html>