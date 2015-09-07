<?php

	$first_name = "Katariina";
	$last_name = "Linde";

	echo $first_name." ".$last_name; //." ". liitmine

?>

<br>

<?php

	$age = 5;
	
	//if(loogikatehe){tõene} else {väär}
	if($age>=18){
		echo "Oled täisealine";
	} else{
		echo "Oled alaealine";
	}

?>

<br>

<?php

	for($i=0; $i<$age; $i=$i+1){
        //see, mida korratakse
        echo "palju, ";
    }
    
    echo "õnne";

?>

<br>
<?php

    echo date("l, d F Y e")
    

?>