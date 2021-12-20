 <?php

 setcookie(nome, (time()+3600));

 setcookie(idade, (time()+3600));

 header("location: message.php");

 ?>