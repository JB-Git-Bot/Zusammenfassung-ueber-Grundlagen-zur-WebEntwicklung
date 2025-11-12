<?php
	$Tankpreis  = 1.499;
	$Liter1     = 40.5;
	$Liter2     = 35.7;
	
	$Kosten_l1  = $Liter1 * $Tankpreis;
	$Kosten_l2  = $Liter2 * $Tankpreis;
	
	$Endkosten  = $Kosten_l1 + $Kosten_l2;
	
	echo "Die Benzinkosten betragen für " . $Liter1 + $Liter2 . " Liter " . $Endkosten . "€ ~" . number_format($Endkosten,2);
?>