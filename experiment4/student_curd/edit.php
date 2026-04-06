<?php
include 'db.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM student WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE student SET
    name='$_POST[name]',
    email='$_POST[email]',
    mobile='$_POST[mobile]',
    department='$_POST[department]'
    WHERE id=$id");

    header("Location: index.php");
}
?>

<form method="post">
    <input type="text" name="name" value="<?= $row['name'] ?>">
    <input type="email" name="email" value="<?= $row['email'] ?>">
    <input type="text" name="mobile" value="<?= $row['mobile'] ?>">
    <input type="text" name="department" value="<?= $row['department'] ?>">
    <button name="update">Update</button>
</form>

