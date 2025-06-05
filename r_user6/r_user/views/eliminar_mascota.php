<?php
$conn = new mysqli("localhost", "root", "", "r_user");

$id = $_GET['id'];
$conn->query("DELETE FROM mascotas WHERE id=$id");

header("Location: user.php");
