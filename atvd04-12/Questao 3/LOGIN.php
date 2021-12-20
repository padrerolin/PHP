<?php

$login = $_REQUEST['loginUser'];
$senha = $_REQUEST['senhaUser'];
$submit = $_REQUEST['submit'];

$login1 = "elmano";
$senha1 = "capiroto";

if ($submit) {
  if($login == " " || $senha ==" "){
    echo "<script:alert('Os campos estão vazios!');</script>";
  } else {
    if(($login == $login1 && $senha == $senha1)){
      session_start();
      $_SESSION['logar'] = 1;
      header("Location: AREARESTRITA.php");
    }
    else{
      echo "<script> alert('Você errou os dados de login! Tente novamente!');</script>";
    }
  }
}
?>

