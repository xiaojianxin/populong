<?PHP
	session_start();
    unset($_SESSION['admin']);
    unset($_SESSION['admin_token']);
    echo json_encode("success");
    exit();
?>