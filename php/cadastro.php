<?php
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $fone = $_POST['telefone'];
  $senha = $_POST['senha'];

  $comparar = "select * from usuario where email_usuario = '$email'";
  $resulta = mysqli_query($con,$comparar);
  $row = mysqli_num_rows($resulta);
  if($row > 0)
  {
    print "<h1>Usuário já cadastrado!</h1>";
    print "<a href = '../pages/cadastro.html>Voltar</a>";
    exit ();
  }
  else
  {
    $sql ="insert into usuario(nome_usuario, email_usuario, fone_usuario, senha_usuario, foto_usuario)";
    $sql .= "values ('".$nome."', '".$email."','".$fone."','".$senha."', '".$nome_foto."');";
    print $sql. "<br>";
    $resut = mysqli_query($con,$sql);
    if($result)
    print "Dados cadastrados com sucesso!";
  else
  print "Erro ao tentar cadastrar!";
  }

  print "<h1>Dados do usuário</h1>";
  print "Nome: $nome <br>";
  print "E-mail: $email <br>";
  print "Telefone: $fone <br>";
  print "Senha: $senha <br>";
?>