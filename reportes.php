<?php
include 'inc/conn.php';
include 'inc/getdata.php';
?>


<?php foreach($users as $user) : ?>
    <?php echo htmlspecialchars($user['id']);  ?>
    <?php echo htmlspecialchars($user['user_name']);  ?>
    <?php echo htmlspecialchars($user['phone_number']);  ?>
    <?php echo htmlspecialchars($user['report_log']);  ?>
    <?php echo "<br>";?>
    <?php endforeach ?>