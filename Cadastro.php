<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
  <link rel="icon" href="img/logo_menu.png">
	<link rel="stylesheet" type="text/css" href="css/StyleCadastro.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

        
<body>
    
	<!--Menu-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
  <a class="navbar-brand" href="index.html"><img src="img/logo_menu.png" width="30" height="30">
  TechRing</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

    
        <container>
      <a href="Cadastro.php"><button class="btn btn-outline-success my-2 my-sm-0" type="button">Cadastro</button></a>
      <a href="alterarsenha.html"><button class="btn btn-outline-light my-2 my-sm-0" type="button">Alterar Senha</button></a>
      <a href="pesquisar.html"><button class="btn btn-outline-primary my-2 my-sm-0" type="button">Pesquisar</button></a>
      <a href="ExcluirConta.html"><button class="btn btn-outline-danger my-2 my-sm-0" type="button">Excluir conta</button></a>
   </container>
 
  </div>
</nav>
<!--Menu-->
 
    <form>
      <a href="Login.html"><button class="btn btn-outline-success my-2 my-sm-0" type="button" id="button1">Login</button></a>
      <a href="Cadastro.php"><button class="btn btn-outline-primary my-2 my-sm-0" type="button">Cadastro</button></a>
   </form>
  </div>
</nav>

<section>
    <div class="wave"></div>
</section>

	<div class="login-form">
		
    <form action="php/gravador.php" method="POST">

        <h2 class="text-center">Cadastro</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="required" name="Email">

        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Senha" required="required" name="Senha">
        </div>
        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            <button type="reset" class="btn btn-danger btn-block">Limpar</button>
        </div>
        <div class="clearfix">
            
        </div>        
    </form>
    
</div>





</body>
</html>