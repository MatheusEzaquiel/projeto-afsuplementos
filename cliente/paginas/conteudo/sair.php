<?php

if(isset($_REQUEST['sair'])){
    session_destroy();
    echo"<script>
    setTimeout(
        function() {
            window.location.replace('../../login-cliente.php');
        }, 1000)
    </script>";
}
?>