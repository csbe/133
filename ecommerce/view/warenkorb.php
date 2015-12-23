<h4>Warenkorb</h4>

<?php
	$count = 0;
	$preis = 0;
	foreach($this->warenkorb->get() as $key => $value){
		echo $key . ' - ' . $value['anzahl'] . '*' . $value['article']->getPreis() . '=' . $value['article']->getPreis()*$value['anzahl'] . 'CHF';
		echo '<span class="addtowarenkorb"><a href="?controller=Warenkorb&action=remove&id='.$value['article']->getId() .'" onclick="$.ajax(this.href).done(function(responseText){$(\'#warenkorb\').html(responseText);}); return false;" id="artikel'.$value['article']->getId().'"><img src="images/loeschen.jpg" alt="Remove from Warenkorb"></a></span><br>';	
		$count += $value['anzahl'];
		$preis += $value['anzahl']*$value['article']->getPreis();
	}
	printf("<br>%d Artikel f&uuml;r %sCHF", $count, number_format($preis,2,'.','\''));
?>