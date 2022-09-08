</main>
<div id="news" class="bg-green-img newsletter text-white text-center padding-small">
	<div class="container">
	<h1>Receba nossas receitas & dicas</h1>
			<p> E faça parte do time de farofeiros Sekiama </p><br>

		<?php
				$form_widget = new \MailPoet\Form\Widget();
echo $form_widget->widget(array('form' => 0, 'form_type' => 'php'));
		?>

		
	</div>
</div>

<footer class="padding-small">
	<div class="container">

		<div class="row justify-content-center">
			<?php
			if (!wp_is_mobile()) { ?>
				<div class="col-md-3">
					<?php
					if (is_active_sidebar('footer-sidebar-1')) {
						dynamic_sidebar('footer-sidebar-1');
					}
					?>
				</div>
			<?php }
			?>
			<div class="col-md-3">
				<?php
				if (is_active_sidebar('footer-sidebar-2')) {
					dynamic_sidebar('footer-sidebar-2');
				}
				?>

			</div>

			<div class="col-md-3">
				<?php
				if (is_active_sidebar('footer-sidebar-3')) {
					dynamic_sidebar('footer-sidebar-3');
				}
				?>
			</div>
			<div class="col-md-3">
				<?php
				if (is_active_sidebar('footer-sidebar-4')) {
					dynamic_sidebar('footer-sidebar-4');
				}
				?>
			</div>
		</div>
	</div>
</footer>

<p class="footer-copyright">

	<a href="https://www.otimaideia.com.br/" title="Ótima Ideia - Agência de Marketing Digital "><img class="img-center" src="https://sekiama.otimaideia.com.br/wp-content/uploads/2021/11/otima-ideia.png" title="Ótima Ideia - Agência de Marketing Digital" alt="Ótima Ideia - Agência de Marketing Digital"></a>
&copy; Sekiama Alimentos da Amazônia @<?php echo date('Y'); ?> Todos direitos reservados. 
</p><!-- .footer-copyright -->

<?php wp_footer(); ?>
</body>

</html>