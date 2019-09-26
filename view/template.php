<?php require "view/head.php"; ?>
<?php require "view/menu.php"; ?>
<?php require "view/body.php"; ?>

	<li class="breadcrumb-item active">
		<?php if (alertHasMsg()) : ?>
			<?=alertShow();?>
		<?php elseif (!alertHasMsg()) : ?>
			<?php if (!isset($_SESSION["nome"])) : ?>
				Bem-vindo ao buscaCEP, visitante. Faça seu cadastro para acessar as outras áreas.
			<?php else : ?>
				Bem-vindo ao buscaCEP, <?php print($_SESSION["nome"]) ?>. Sinta-se à vontade.
			<?php endif; ?>
		<?php endif; ?>
					
	</li>
</ol>    
<main>
    <?php require buildViewPath($view); ?>
</main> 
       
<?php require "view/footer.php"; ?>