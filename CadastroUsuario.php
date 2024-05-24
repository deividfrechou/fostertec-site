<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MetodoUp - Buscando Seu Melhor Resultado</title>
    <meta name="Description" content="Cursos de Marqueting Digital, Informática em geral, Programação de sistemas, Programação web, HTML5, CSS3, JavaScript, Java, PHP, MySql">
    <meta name="keywords" content="Programação de sistemas, Programação web, HTML5, CSS3, JavaScript, Java, PHP, MySql, word, excel, power point, corel draw, photoshop, deivid, frechou,http://metodoup.byethost14.com">
    <meta name="google-site-verification" content="Zx6Tq2P8FuI-VnKyu7GwFNhGIePLYL1QSMH8hvmZifc" />
    <meta name="robots" content="index, falow">
    <meta name="author" content="Deivid frechou">
    <link rel="stylesheet" type="text/css" href="layout.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <link rel="icon" href="icon.png">
    <script src="scripts.js"></script>
</head>


<body>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="327627674702661">
</div> 


    <header class="cabecalho">
	<a href="index.htm"><h1 class="logo"></h1></a>
	<button class="btn-menu"><i class="fa fa-bars fa-lg"></i></button>
    
	<nav class="menu">
	<a class="btn-close"><i class="fa fa-times"></i></a>
	<ul>
        <?php
        if ($_COOKIE['logado']=="s"){
			//echo '<li><a href='javascript:func()'onclick='loja()'>|| Loja ||</a></li>';
			echo '<li><a href="index.php">Home</a></li>';
			echo '<li><a href="lead1.php">Brinde</a></li>';
			echo '<li><a href="curso.php">Curso</a></li>';			
			echo '<li><a href="logof.php">Sair</a></li>';
		}else{
			echo '<li><a href="index.php">Home</a></li>';
			echo '<li><a href="lead1.php">Brinde</a></li>';
			echo '<li><a href="cadastro1.php">Cadastro</a></li>';
			echo '<li><a href="login1.php">Login</a></li>';
		}
        ?>  
	</ul>
	</nav>	
</header>


<div class="banner">

   <div class="titulo">
     <h3>MetodoUp<br><br>
     Buscando Seu Melhor Resultado</h3>
     
  </div>


</div>

<main>
<center>

  <article class="cadastro">
   <center>
    <h2>Cadastro de Usuários</h2>
    <form action="cadastro2.php" method="post">
      <input type="text" name="nome" id="nome" placeholder="Seu nome completo">
      <input type="text" name="telefone" id="telefone" placeholder="51999999999 - Telefone">
      <input type="text" name="login" id="login" placeholder="seu e-mail">
      <input type="password" name="senha" id="senha" placeholder="Sua senha"><br>
      <input type="password" name="repete" id="repete" placeholder="Repita a senha"><br>
      <button>Cadastrar</button>
    </center>
    </form>
    
  </article> 
  
</center>

</main>

<footer class="rodape">
  <div class="social-icons" align="center">
     <a href="http://facebook.com/fostertec"><i class="fab fa-facebook-square"></i></a>
     <!-- <a href="#"><i class="fab fa-google-plus-square"></i></a>
     <a href="#"><i class="fab fa-twitter-square"></i></a>
     <a href="#"><i class="fab fa-linkedin"></i></a>
     <a href="#"><i class="fab fa-pinterest-square"></i></a>   -->
     <a href="https://wa.me/5551989595145"><i class="fab fa-whatsapp"></i></a>
  </div> 
 <p class="copyright">
    Copyright @ fostertec 2011 - Todos os direitos reservados.<br>
    CNPJ: 14.090.888/0001-05
  </p>
</footer>

<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
	$(".btn-menu").click(function(){
      $(".menu").show();
});
	$(".btn-close").click(function(){
      $(".menu").hide();
});
</script>
</body>
</html>