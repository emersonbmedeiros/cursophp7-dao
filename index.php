<?php

require_once("config.php");

//select em todos usuários
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//Carrega Um usuário só
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("marcos", "123456");

//echo $usuario;

//inserir usuario procedure (criando novo usuario)
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");
//$aluno->insert();
//echo $aluno;

//alterar um usuario
//$usuario =  new Usuario();
//$usuario->loadbyId(8);
//$usuario->update("professor", "!@#$");
//echo $usuario;

$usuario =  new Usuario();

$usuario->loadbyId(7);

$usuario->delete();

echo $usuario;

?>