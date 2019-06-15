<?php 
  
$con =  mysqli_connect("localhost", "root", "", "registo");
$sql = "SELECT id_codigo FROM usuarios WHERE usuarios='".$_POST['login']."' AND senha='".$_POST['login']."'";
$res = mysqli_query($con, $sql);
var_dump($res);
/*$login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
/** @var type $connect */
/*$connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
  $db = mysql_select_db('nome_do_banco_de_dados');
    if (isset($entrar)) {
             
      $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:Turismo.php");
        }
    }*/
?>
