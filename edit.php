<?php
include "connection.php";
$id=$_GET["id"];
$brand="";
$model="";
$processor="";
$ram="";
$storage="";
$price="";

$res=mysqli_query($link,"select * from laptops where id=$id");
while ($row=mysqli_fetch_array($res))
{
    $brand=$row["brand"];
    $model=$row["model"];
    $processor=$row["processor"];
    $ram=$row["ram"];
    $storage=$row["storage"];
    $price=$row["price"];
}
?>

<html lang="en">
<head>
    <title>Laptop Shop - Edit Laptop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-6">
        <h2>Edit Laptop</h2>
        <form action="" name="form1" method="post">
            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" id="brand" name="brand" value="<?php echo $brand; ?>">
            </div>
            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" class="form-control" id="model" name="model" value="<?php echo $model; ?>">
            </div>
            <div class="form-group">
                <label for="processor">Processor:</label>
                <input type="text" class="form-control" id="processor" name="processor" value="<?php echo $processor; ?>">
            </div>
            <div class="form-group">
                <label for="ram">RAM (GB):</label>
                <input type="number" class="form-control" id="ram" name="ram" value="<?php echo $ram; ?>">
            </div>
            <div class="form-group">
                <label for="storage">Storage:</label>
                <input type="text" class="form-control" id="storage" name="storage" value="<?php echo $storage; ?>">
            </div>
            <div class="form-group">
                <label for="price">Price (VND):</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" value="<?php echo $price; ?>">
            </div>
            <button type="submit" name="update" class="btn btn-default">Update</button>
        </form>
    </div>
</div>
</body>

<?php
if(isset($_POST["update"]))
{
    mysqli_query($link,"update laptops set brand='$_POST[brand]',model='$_POST[model]',processor='$_POST[processor]',ram='$_POST[ram]',storage='$_POST[storage]',price='$_POST[price]' where id=$id");

    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>
</html>
