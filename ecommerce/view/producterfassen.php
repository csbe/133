<form action="?controller=Product&action=speichern" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $this->product->getId() ?>">
	<label>Name</label>
	<input type="text" name="name" required value="<?php echo $this->product->getName() ?>">
	<br>
	<label>Description</label>
	<textarea name="description" required><?php echo $this->product->getDescription() ?></textarea><br>
	<label>Preis</label>
	<input type="text" name="preis" required value="<?php echo $this->product->getPreis() ?>"><br>
	<label>Bild</label>
	<?php if($this->product->getImage()!=null) {
			echo '<img src="'. $this->product->getImage() . '" alt="'.$this->product->getName().'"><input type="hidden" name="image" value="'.$this->product->getImage().'">';
		}
		?>
	<input type="file" name="image" accept="image/*"><br>
	<input type="submit" value="speichern">
</form>