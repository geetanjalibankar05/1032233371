<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student CRUD Application</title>
    <style>
        body { font-family: Arial; background: #f4f6ff; }
        form, table {
            width: 60%;
            margin: auto;
            background: #fff;
            padding: 20px;
        }
        input { width: 100%; padding: 8px; margin: 5px 0; }
        button { background: #4f46e5; color: white; padding: 8px 15px; border: none; }
        table { margin-top: 30px; border-collapse: collapse; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
    </style>
</head>
<body>

<h2 align="center">Student CRUD Application</h2>

<form method="post">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="mobile" placeholder="Mobile" required>
    <input type="text" name="department" placeholder="Department" required>
    <button name="save">Save</button>
</form>

<?php
if (isset($_POST['save'])) {
    mysqli_query($conn, "INSERT INTO student (name,email,mobile,department)
    VALUES ('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[department]')");
}
?>

<table>
<tr>
    <th>ID</th><th>Name</th><th>Email</th><th>Mobile</th><th>Department</th><th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM student");
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['name'] ?></td>
<td><?= $row['email'] ?></td>
<td><?= $row['mobile'] ?></td>
<td><?= $row['department'] ?></td>
<td>
<a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
<a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
</td>
</tr>
<?php } ?>
</table>

</body>
</html>

