
<?php
	$firstname = 'Rauno';
	$lastname = 'Kosula';
	echo $firstname.' '.$lastname;
?>

<br>

<?php
	//(Loogika)
	$age = 19;
	if ($age < 18) {
		echo 'Sa oled alaealine';
		
	} else {
		echo 'Sa oled vana!';
	}
	
?>

<br>

<?php

	/*for(palju korratakse) {
		mida
		
	}*/
	
	for ($i = 0; $i < $age; $i = $i + 1) {
	echo 'palju,'.$i.',';
	}
	echo 'onne!';
?>




