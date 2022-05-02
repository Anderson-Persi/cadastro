<?php 

require_once("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if($nome == ""){
    echo 'Preencha o Campo nome!';
    exit();
}

if($cpf == ""){
    echo 'Preencha o Campo cpf!';
    exit();
}
if($telefone == ""){
    echo 'Preencha o Campo telefone!';
    exit();
}

if($email == ""){
    echo 'Preencha o Campo email!';
    exit();
}

if($senha == ""){
    echo 'Preencha o Campo senha!';
    exit();
}



$res = $pdo->query("SELECT * FROM usuario where cpf = '$_POST[cpf]'"); 
$dados = $res->fetchAll(PDO::FETCH_ASSOC);
if(@count($dados) == 0){

    $res = $pdo->prepare("INSERT into usuario (nome, cpf, telefone, email, senha) values (:nome, :cpf, :telefone, :email, :senha)");
    $res->bindValue(":nome", $nome);
    $res->bindValue(":cpf", $cpf);
    $res->bindValue(":email", $email);
    $res->bindValue(":telefone", $telefone);
    $res->bindValue(":senha", $senha);

    $res->execute();

    


    echo 'Cadastrado com Sucesso!';
}else{
    echo 'CPF já Cadastrado!';
}


?>
