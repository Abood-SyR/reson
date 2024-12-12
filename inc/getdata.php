<?php

$sql = 'SELECT * FROM reportlog';
$result = mysqli_query($conn , $sql);
$users = mysqli_fetch_all($result , MYSQLI_ASSOC);

?>