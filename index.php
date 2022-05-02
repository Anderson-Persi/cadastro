<?php 
$pag = "cadastrar.php";
require_once("conexao.php"); 
@session_start();

?>


<!DOCTYPE html>
<html>

<head>

    <title>Inserir BD</title>
    <meta name="description" content="Inserir BD">
    <meta name="author" content="Anderson Persi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" integrity="da54aa7221a01312a4fb4e8ac845b8f7732df5c4" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" integrity="da54aa7221a01312a4fb4e8ac845b8f7732df5c4" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <main>
        <form class="cadastro" method="post">
            <h2>Cadastro</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="user-box">
                        <h6>Nome</h6>
                   <label for="exampleInputEmail1"></label>
                   <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira nome e sobrenome">
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-md-12">
             <div class="user-box">
                <h6>CPF</h6>
               <label for="exampleInputEmail1"></label>
               <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira seu CPF" required>
           </div>
       </div>
   </div>
   <div class="row">
       <div class="col-md-12">
          <div class="user-box">
            <h6>Telefone</h6>
             <label for="exampleInputEmail1"></label>
             <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Número de Telefone" required>
         </div>
     </div>
 </div>
 </div>
</div>
<div class="row">
   <div class="col-md-12">
      <div class="user-box">
        <h6>Email</h6>
         <label for="exampleInputEmail1"></label>
         <input type="email" class="form-control" id="email" name="email" placeholder="Inserir seu Email" required>
     </div>
 </div>
</div>
<div class="row">
 <div class="col-md-6">
     <div class="user-box">
        <h6>Senha</h6>
        <label for="exampleInputEmail1"></label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
    </div>
</div>
</div>

<small><div class="text-center" id="div-mensagem"></div></small>

<a type="submit" id="btn-cadastrar"><span></span><span></span><span></span><span></span>Cadastrar</a>
</form>

</main>
</body>


</html>

<script type="text/javascript">
    $('#btn-cadastrar').click(function(event) {
        event.preventDefault();

        $.ajax({
            url: "cadastrar.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(msg) {
                if (msg.trim() === 'Cadastrado com Sucesso!') {

                    $('#div-mensagem').addClass('text-success')
                    $('#div-mensagem').text(msg);
                    $('#btn-fechar-gerar').click();
                } else {
                    $('#div-mensagem').addClass('text-danger')
                    $('#div-mensagem').text(msg);


                }
            }
        })
    })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="js/mascara.js"></script>