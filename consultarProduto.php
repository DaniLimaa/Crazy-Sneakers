<?php

include './includes/header.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    include './includes/detalheProduto.php';
} else {
    header('location:index.php');
}

include './includes/footer.php';

?>