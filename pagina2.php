<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>MARMITAS DONA DIRCE</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		
	</header>
	
	<main>
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Marmitas da Dona Dirce</h1>
				<p>Todas Deliciosas!</p>
			</header>
			<?php
                $id = $_GET['id'];
				foreach($tutoriais as $key => $value){
                    if($value['id'] == $id){
			?>
			<article>
				<a href="#"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=$value['descricao'];?></p>
				<h2>Disponivel nos tamanhos : </h2>
				<p><?=$value['tamanho'];?></p>
				<h2>Preço : </h2>
				<p><?=$value['preco'];?></p>
				<h2>Contato para encomendar : </h2>
				<p>(99)00000-0000</p>


			</article>
			<?php
                    }
				}
			?>
			
		</section>

<!--suport 
        <section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Ver outros Tutoriais</h1>
				<p>xxxxx</p>
			</header>
			<?php
				foreach($tutoriais as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><?=$value['titulo'];?></h2>
	    	</article>
			<?php
                    }
				}
			?>
			
		</section>



		
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Quer receber todas as novidades em seu e-mail?</h1>
                    <p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>-->
	</main>

	<footer>
		<a>THIAGO LUIS GAEBLER R.A. 22117073-5</a>
	</footer>
</body>
</html>