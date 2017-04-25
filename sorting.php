<?php
echo "Sort Array in Ascending Order - sort():-";
echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
$arrlength = count($numbers);
sort($numbers);
{
    for ($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "<br>";}
}
echo "Sort Array in descending Order - rsort():-";
echo "<br>";
rsort($numbers);
{
    for ($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "<br>";}
}

echo "Sort Array in Descending Order - asort():-";
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
{
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";}
}
echo "Sort Array (Ascending Order), According to Key - ksort():-";
echo "<br>";

ksort($age);
    {
        foreach ($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
        }
    }
?>