<?php
//@session_start();

if(isset($_REQUEST['sair'])){
    
    session_destroy();

    header("Location: ../../index-login.php?acao=sair");

    /*
    echo"<script>
    setTimeout(
        function() {
            window.location.replace('../../index.php');
        }, 1000)
    </script>";
    */
    
}

?>