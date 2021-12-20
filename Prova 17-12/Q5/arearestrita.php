<html>
    <?php

    session_start();
    if($_SESSION["logou"]==1){
        echo"Bem vindo a área restrita!";
        session_destroy();
    }
    else{
        $_SESSION["erro"] = 2;
        header('location: index.php');
    }
    ?>

</html>