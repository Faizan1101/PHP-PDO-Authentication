<?php

require ("includes/header.php");
require ("includes/nav.php");

?>

<?php
    if(isset($_SESSION["name"])){
        echo "
        <h3 class='text-center mt-5'>Welcome $_SESSION[name]</h3>
        ";
    }
?>

<?php
require ("includes/footer.php");
?>