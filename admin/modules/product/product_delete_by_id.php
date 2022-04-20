<?php
include "../../connect.php";

$del_id = $_POST["id"];
if($connection) mysqli_query($connection, "DELETE FROM product WHERE id = '$del_id'");
mysqli_close($connection);

header('Location: ../../../admin/#product');
exit;
?>