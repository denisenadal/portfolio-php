<footer id="main-footer">
	<div class="container">
		<p class="float-right">copyright Denise Nadal <?php echo  date("Y");?></p>
	</div>
	<script type="text/javascript" src="<?php echo DEN_ROOT;?>js/debounce.js"></script>
	<script type="text/javascript" src="<?php echo DEN_ROOT;?>js/base.js"></script>
	<?php if(!empty($pageVars['js']) ){
		foreach ($pageVars['js'] as $script) {
			echo '<script type="text/javascript" src="'.DEN_ROOT.'js/'.$script.'.js"></script>';
		}
	}?>
</footer>
</body>

</html>
