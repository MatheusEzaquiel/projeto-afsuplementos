<?php

if(isset($_REQUEST['sair'])){
    
    session_destroy();
    header("Location: ../index.php?acao=sair");

    /*
    echo"<script>
    setTimeout(
        function() {
            window.location.replace('../../login-cliente.php');
        }, 1000)
    </script>";
    */
    
}

?>