<?php
include "connect.php";
?>

<html>
<head>
    <title>Laptop Shop</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Laptop Management</h2>
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="form-group">
                <label>Brand:</label>
                <input type="text" class="form-control" name="brand" required>
            </div>
            <div class="form-group">
                <label>Model:</label>
                <input type="text" class="form-control" name="model" required>
            </div>
            <div class="form-group">
                <label>Processor:</label>
                <input type="text" class="form-control" name="processor" required>
            </div>
            <div class="form-group">
                <label>RAM (GB):</label>
                <input type="number" class="form-control" name="ram" required>
            </div>
            <div class="form-group">
                <label>Storage:</label>
                <input type="text" class="form-control" name="storage" required>
            </div>
            <div class="form-group">
                <label>Price (VND):</label>
                <input type="number" step="0.01" class="form-control" name="price" required>
            </div>
            <button type="submit" name="insert" class="btn btn-primary">Insert</button>
        </form>
    </div>
</div>

<hr>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th><th>Brand</th><th>Model</th><th>Processor</th>
                <th>RAM</th><th>Storage</th><th>Price</th>
                <th>Edit</th><th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $res = mysqli_query($link, "SELECT * FROM laptops");
        while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['brand']."</td>";
            echo "<td>".$row['model']."</td>";
            echo "<td>".$row['processor']."</td>";
            echo "<td>".$row['ram']."</td>";
            echo "<td>".$row['storage']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td><a href='edit.php?id=".$row['id']."'><button class='btn btn-success'>Edit</button></a></td>";
            echo "<td><a href='delete.php?id=".$row['id']."'><button class='btn btn-danger'>Delete</button></a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<?php
if (isset($_POST['insert'])) {
    mysqli_query($link, "INSERT INTO laptops VALUES (NULL,'$_POST[brand]','$_POST[model]','$_POST[processor]',$_POST[ram],'$_POST[storage]',$_POST[price])");
    echo "<script>window.location.href=window.location.href;</script>";
}
?>
</body>
</html>
