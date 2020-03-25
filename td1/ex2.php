<a href="?size=15&color=red">message en 15 et rouge</a><br>
<a href="?size=30&color=green">message en 30 et vert</a><br>
<a href="?size=50&color=blue">message en 50 et bleu</a><br>

<?php
$message=$_GET["message"]??"";
$color=$_GET["color"]??"red";
$size=$_GET["size"]??"15";
?>
<div> style="font-size: <?=$size?>px;color:<?=$color?>"> Message
<?=$message?></div>

<form method="GET">
    <label for="size">Size : </label>
    <input type="hidden" name="color"> value="<?=$color?>">
    <input type="hidden" name="message"> value="<?=$message?>">
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">
</form>