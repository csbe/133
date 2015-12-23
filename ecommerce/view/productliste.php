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
			<span class="addtowarenkorb"><a href="?controller=Warenkorb&action=add&id=<?php echo $product->getId() ?>" id="<?php echo $product->getId() ?>" onclick="return false;"><img src="images/warenkorb.gif" alt="Add to Warenkorb"></a></span>	
		</article>			
		<?php
	}
?>
</section>

<script type="text/javascript">
	
	$("article .addtowarenkorb a").click(function () {
		$.ajax(this.href).done(function(responseText){$('#warenkorb').html(responseText);});
		
		$xwarenkorb = $("#warenkorb").offset().left; //top
		$ywarenkorb = $("#warenkorb").offset().top;
		if ($("#artikel"+$(this).attr('id')).length>0) {
			$xwarenkorb = $("#artikel"+$(this).attr('id')).offset().left; //top
			$ywarenkorb = $("#artikel"+$(this).attr('id')).offset().top;			
		}
		$xarticle = $(this).offset().left;
		$yarticle = $(this).offset().top;
		$x = $xwarenkorb - $xarticle;
		$y = $ywarenkorb - $yarticle + 20;
		$clone = $(this).parent().clone();
		$(this).parent().parent().append($clone);
		$clone.animate({'left':$x, 'top':$y, 'opacity':'0.5'},600).animate({'opacity':'0'},300, 'linear', function () {
			$clone.remove();
		});
		//$(this).hide();
		//$(this).animate({"display": "none" },150);	
		
		return false;
	});
</script>