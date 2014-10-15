<ul>
<?php foreach($options as $value => $text): ?>
	<li>
		<input id="<?php echo "${name}_$value"; ?>" type="radio" name="<?php echo $name; ?>" value="<?php echo $value; ?>"<?php if($selected === $value): ?> checked="checked"<?php endif; ?><?php if($opt_script[$value]): ?> onclick="<?php echo $opt_script[$value]; ?>"<?php endif; ?>>
		<label for="<?php echo "${name}_$value"; ?>"><?php echo htmlspecialchars($text); ?></label>
	</li>
<?php endforeach; ?>
</ul>