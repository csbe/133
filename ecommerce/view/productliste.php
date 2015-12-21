<section>
<h2>Produkt&uuml;bersicht</h2>
<?php

	foreach($this->products as $product){
		?>
		<article>
			<h3><?php echo $product->getName() ?></h3>
			<figure>
				<img src="<?php echo $product->getImage() ?>" alt="<?php echo $product->getName() ?>">			
			</figure>
			<p><?php echo $product->getDescription() ?></p>	
			<span class="preis"><?php echo $product->getPreis() ?> CHF</span>	
			<span class="addtowarenkorb"><a href="?controller=Warenkorb&action=add&id=<?php echo $product->getId() ?>" onclick="$.ajax(this.href).done(function(responseText){$('#warenkorb').html(responseText);});;return false;"><img src="images/warenkorb.gif" alt="Add to Warenkorb"></a></span>	
		</article>			
		<?php
	}
?>
</section>