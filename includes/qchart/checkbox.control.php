<ul>
<?php foreach($options as $value => $text): ?>
	<li>
		<input id="<?php echo "${name}_$value"; ?>" type="checkbox" name="<?php echo "${name}[$value]"; ?>" value="<?php echo $value; ?>"<?php if(!empty($selected) && in_array($value, (array)$selected)): ?> checked="checked"<?php endif; ?>>
		<label for="<?php echo "${name}_$value"; ?>"><?php echo htmlspecialchars($text); ?></label>
	</li>
<?php endforeach; ?>
</ul>