<?php 
 
/*$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('registo');
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];*/
if($_POST['senha'] == $_POST['repsenha']){
    $con =  mysqli_connect("localhost", "root", "", "registo");
    $sql = "INSERT INTO usuarios (`nome`, `endereco`, `rg`, `cpf`, `email`, `usuario`, `senha`) VALUES ('".$_POST['nome']."', '".$_POST['endereco']."', '".$_POST['rg']."', '".$_POST['cpf']."', '".$_POST['e-mail']."', '".$_POST['login']."', '".$_POST['senha']."')";
    mysqli_query($con, $sql);
    echo"<script language='javascript' type='text/javascript'>alert('Voce foi cadastrado');window.location.href='index.php'</script>";
}else{
     die("Favor colocar a mesma senha");
     echo"<script language='javascript' type='text/javascript'>alert('Favor colocar a mesma senha');window.location.href='cadastro.php'</script>";
}
?>
