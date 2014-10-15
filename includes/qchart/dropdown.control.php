<select name="<?php echo $name; ?>">
<?php foreach($options as $value => $text): ?>
	<option value="<?php echo $value; ?>"<?php if($selected === $value): ?> selected="selected"<?php endif; ?>><?php echo htmlspecialchars($text); ?></option>
<?php endforeach; ?>
</select>
