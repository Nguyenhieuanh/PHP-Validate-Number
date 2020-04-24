<?php
$regexp = '/\d{2}\-0[0-9]{9}/';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $phone = $_GET['phone'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Validate số điện thoại</title>
</head>
<body>
<form action="#" method="get">
    <label>
        Phone number
        <input type="text" name="phone">
    </label>
    <button type="submit" name="check">Check</button>
    <br>
    <?php if (isset($_REQUEST['check'])) {
        if (!preg_match($regexp, $phone)) {
            echo "Wrong format (xx)-(0xxxxxxxxx)";
        } else echo "Ok!";
    } ?>
</form>

</body>
</html>
