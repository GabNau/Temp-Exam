<?php
//Author: Gabrielle Naubert
//March 6, 2020
  

//using base code from https://www.php.net/manual/en/function.fgetcsv.php for parsing
$row = 1;
echo "Here is a list of residents who live in Ontario: \n";
//Open file
if (($handle = fopen("address.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $row++;
        //Check the province
        if ($data[3]=="Ontario") {
        	//Print all information except for province since we already know it's Ontario
        	for ($c=0; $c < 3; $c++) {
            echo $data[$c]," ";
        	}
        	echo "\n";
        }
    }
    //Close file handler
    fclose($handle);
}

?>