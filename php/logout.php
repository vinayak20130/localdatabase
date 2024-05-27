<?php


include ('../authentication.php');
if (isset($_POST['logindone']) ) {

// session_destroy();
unset($_SESSION['auth']);
unset($_SESSION['role']);
unset($_SESSION['auth_user']);
$_SESSION['status'] = "logout done";
            header('Location: ../index.php');
            exit(0);
}
?>