<?php
if (isset($_REQUEST['message'])) {
    $message = $_REQUEST['message'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css"/>
</head>

<body>
    <section class="toast-msg">
        <?= isset($message) ? "<p>$message</p>" : "" ?>
    </section>
    <h1>Employee Dashboard</h1>
    <ul class="ul_employees">
        <?php foreach ($employees as $employee) : ?>
            <li class="li_employee">
                <?= $employee["first_name"] . " " . $employee["last_name"] ?>
                <a href="index.php?controller=employee&action=getEmployee&emp_no=<?= $employee["emp_no"] ?>" class="btn btn_employee">Update</a>
                <a href="index.php?controller=employee&action=deleteEmployee&emp_no=<?= $employee["emp_no"] ?>" class="btn btn_employee">Delete</a>
            </li>
        <?php endforeach ?>
    </ul>
    <a href="index.php?controller=employee&action=newEmployee" class="btn">New employee</a>
    <a href="index.php" class="btn">Back</a>
</body>

</html>