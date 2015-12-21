<h4>Warenkorb</h4>

<?php

	foreach($this->warenkorb->get() as $key => $value){
		echo $key . ' - ' . $value['anzahl'] . '*' . $value['article']->getPreis() . '=' . $value['article']->getPreis()*$value['anzahl'] . 'CHF';
		echo '<span class="addtowarenkorb"><a href="?controller=Warenkorb&action=remove&id='.$value['article']->getId() .'" onclick="$.ajax(this.href).done(function(responseText){$(\'#warenkorb\').html(responseText);});;return false;"><img src="images/loeschen.jpg" alt="Remove from Warenkorb"></a></span><br>';	
	}

?>