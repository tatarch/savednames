<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$fd = fopen('name.txt', 'a');
$line = $_POST['username'];
if (!empty($_POST['username'])) {
    fwrite($fd, "\n" . $line);
    fclose($fd);
    unset($_POST['username']);
    header("Location: " . $_SERVER['PHP_SELF']);
}

$lines = file('name.txt');
echo '<pre>';
var_dump($lines);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

</head>
<body>


<form method="POST">
    <input type="text" name="username">
    <input type="submit" value="Saved">
</form>

<?php
echo "<ul>";
foreach ($lines as $line) {
    echo "<li>" . $line . "</li>";
}
echo "</ul>";
?>

</body>
</html>