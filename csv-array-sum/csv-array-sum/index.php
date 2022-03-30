<!DOCTYPE html>
<html>
<body>

<?php
$sum1=0;
$sum2=0;
$f_pointer=fopen("datafile.csv","r"); // file pointer
while(! feof($f_pointer)){
    $ar=fgetcsv($f_pointer);
    echo print_r($ar); // print the array 
    echo "<br>";
    $sum1+=$ar[0];
    $sum2+=$ar[1];
    }


echo "sum(Col0)=".$sum1."<br>";
echo "sum(Col1)=".$sum2;

?>
<br/>
<a href="/csv-to-api/?source=https://www.fema.gov/about/reports-and-data/openfema/FimaNfipClaims.csv">csv-to-api demo</a>
</body>
</html>