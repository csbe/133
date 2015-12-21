<form action="?controller=Rolle&action=speichern" method="post">
	<input type="hidden" name="id" value="<?php echo $this->role->getId() ?>">
	<label>Name</label>
	<input type="text" name="name" required value="<?php echo $this->role->getName() ?>">
	<input type="submit" value="speichern">
</form>