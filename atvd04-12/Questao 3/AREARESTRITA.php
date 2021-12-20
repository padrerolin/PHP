<?php 
    session_start();
    if(array_key_exists('Logout', $_REQUEST)){
        session_destroy();
        header('Location: index.html');
    }
    if($_SESSION['logar'] == 1){
        echo '<img src="noah.png" alt="">';
    }else {
        echo "<script> alert('Você não possui acesso a esta área!');</script>";
        header('Location: index.html');
    } 
?>
<form method = "POST">
        <input type="submit" name="Logout" value="Deslogar!" />
</form>