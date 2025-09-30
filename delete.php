<?php
include "connect.php";

$id = $_GET["id"];

// Xóa laptop theo id
mysqli_query($link, "DELETE FROM laptops WHERE id=$id");

// Quay lại trang index
?>
<script type="text/javascript">
    window.location="index.php";
</script>
