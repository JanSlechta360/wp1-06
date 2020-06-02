<?php

$wood= true;
$nails= true;
$rope= true;
$knife= true;

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crafteni</title>
</head>
    <body>
        <h1>Batoh</h1>
<?php

if ($wood) {
    echo '<img src="https://gamepedia.cursecdn.com/minecraft_gamepedia/thumb/3/37/Oak_Planks_JE6_BE3.png/150px-Oak_Planks_JE6_BE3.png?version=998d61ddd34c19a587b7766fc96dd22b" alt="wood"></br>'; 
}   else { 
    echo "nemas wood</br>";
}

if ($nails) {
    echo '<img src="https://celticbuildingsupplies.com/wp-content/uploads/2018/01/product-hardware-nails-6.jpg" alt="nails"></br>';
}   else {
    echo "nemas nails</br>";
}

if ($rope) {
    echo '<img src="https://gamepedia.cursecdn.com/minecraft_gamepedia/thumb/1/1f/Lead_JE2_BE2.png/150px-Lead_JE2_BE2.png?version=af7d3d7c5d742bdc237ef3a601d18cfe" alt="rope"></br>';
}   else {
    echo "nemas rope</br>";
}

if ($knife) {
    echo '<img src="https://www.vhv.rs/dpng/d/122-1225676_fadecase-karambit-elite-fade-karambit-knife-cs-go.png" alt="knife"></br>';
}   else {
    echo "nemas knife</br>";
}

?>
         <h2>Vyroba</h2>
<?php

if ($rope && $wood && $knife) {   
    echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTa0RclEWkv4DQ7CGqpHZ4u6aNTmUnT7EqtX_ZbmC01nx95NfZ1&usqp=CAU" alt="luk"></br>';
}

if ($wood && $nails) {
    echo '<img src="https://gamepedia.cursecdn.com/dayz_gamepedia/e/e8/Nailed_Baseball_Bat.png" alt="Baseball Bat Nailed"></br>';
}

if ($wood && $rope) {
    echo '<img src="https://zbrane.subrt.cz/galerie/1_8765/nuncaky-drevene-original.jpg" alt="nuncaky"></br>';
}

if ($wood && $knife) {
    echo '<img src="https://www.outdoorlife.com/resizer/oe1Q4a08AuuFTVHm9oZRx4dMhZY=/760x502/arc-anglerfish-arc2-prod-bonnier.s3.amazonaws.com/public/DS2TUFN2NI52QOGOO5Z6DYKFHM.JPG" alt="wooden spear"></br>';
}








?>
    </body>
</html>