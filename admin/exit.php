<?php
    include('parts/header.php'); 

    if (isset($_SESSION['is_auth']) && $_SESSION['is_auth']) {
        unset($_SESSION['is_auth']);
    }
    
    header('Location: /admin/auth.php');
?>

<?php include('parts/footer.php'); ?>