<input id="<?php echo htmlspecialchars($this['id']) ?>" name="<?php echo htmlspecialchars($this['name']) ?>" type="password"<?php if (isset($this['class'])) echo ' class="' . htmlspecialchars($this['class']) . '"'?> value="<?php if (isset($this['value'])) echo htmlspecialchars($this['value']) ?>"<?php if (isset($this['size'])) echo ' size="' . ((int) $this['size']) . '"' ?> />