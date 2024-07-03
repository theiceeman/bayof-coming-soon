<?php
require_once('./lib/table-traits.php');
require_once('./lib/basic-function.php');
require_once('./lib/user-functions.php');


if (isset($_POST['firstname'])) {
    $msg = $user->create($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['phone']);
    print_r(json_encode($msg));
}