

<html>
<body>
    <h1>

    <?php
$namnet = "Stefan"; // // global scope – syns BARA globalt
?>

<?php

// This is as comment
# this is also a comment
/*
    this is yet another comment
*/

$age=12;
$age = "really old";

$date = date('Y-m-d H:i:s');
#echo "Aktuell dag och tid är $date" ;

echo $date;
echo "<br/>";
var_dump($date);
echo "<br/>";
var_dump($age);
echo "<br/>";
?>
</h1>
<ul>
    <li>Hej</li>
    <li>Hopp</li>
    <?php writeTheValue($namnet) ?> 
</ul>



<?php
function writeTheValue($namnet){
    global $date; // bad practice
    echo "<li>$namnet, $date</li>";
}

echo $namnet    ;

?>

<div class="<?php echo "active" ?>"> Hej </div>
</body>
</html>
