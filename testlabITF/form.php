<?php
require('connect.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $bmi = $weight/(pow(($height/100),2));

    $sql = "INSERT INTO datainsert (name , weight, height, bmi) VALUES ('$name', '$weight', '$height', '$bmi')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        echo "<a href='index.php'>back to home page</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form page</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">name</label>
        <input type="text" name="name">
        <label for="weight">weight</label>
        <input type="text" name="weight">
        <label for="height">height</label>
        <input type="text" name="height">
        <input type="submit" value="ยืนยัน" name="submit">
    </form>
</body>

</html>