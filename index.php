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
	<article class="main_suport">
            <div class="main_suport_content">
                <header>
				<li><a href='manutencao.png' title="Artigos" alt="Artigos">Valores da empresa</a></li>
				<li><a href='manutencao.png' title="Suporte" alt="Suporte">Contatos</a></li>
                </header>
        
            </div>
        </article>
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>MARMITAS DONA DIRCE</h1>
                    </header>
                    <p> Escolha sua marmita!</p>
                </div>
            </article>
        </div>
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h2>EXPERIMENTE ESSA DELICIA!</h2>
			</header>
			<?php
				foreach($tutoriais as $key => $value){
			?>
			<article>
				<a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 0);?></p>
			</article>
			<?php
				}
			?>
			
		</section>
        
	</main>

	<footer>
            <ul>
                <li><a href='manutencao.png'>Historia da Dona Dirce</a></li>
                <li><a href='manutencao.png'>Valores da Empresa</a></li>
                <li><a href='manutencao.png'>Nos Siga Pelas redes sociais</a></li>
            </ul>
            <p>Feito por :Thiago Luis Gaebler r.a. 22117073-5</p>
    </footer>
</body>
</html>