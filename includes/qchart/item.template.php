<div id="<?php echo $name; ?>"<?php if($hidden): ?> style="display:none"<?php endif; ?>>
	<div  class="labelXXLarge clear"<?php if($required): ?> style="color:#f44"<?php endif; ?>><?php echo htmlspecialchars($text); ?></div>
	<div class="inputLarge">
		<?php echo $control; ?>
	</div>
</div>