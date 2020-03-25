
<?php
include "include/header.php";
?>

<a href="?l=2&c=2">Tableau 2 x 2</a><br>
<a href="?l=5&c=5">Tableau 5 x 5</a><br>
<a href="?l=10&c=8">Tableau 10 x 8</a><br>
<hr>

<?php
$nblignes=$_GET["l"]??10;
$nbcolonnes=$_GET["c"]??10;
echo "<h2>Tableau de $nblignes par $nbcolonnes</h2>";
?>

<table border='1'>
    <tbody>
      <?php for($i=0;$i<$nblignes;$i++){
        $gras=($i%2==0)?"bold":"normal";
      ?>
        <tr>

        <?php for($j=0;$j<$nbcolonnes;$j++){
            $rouge=($j%2==0)?"red":"black";
            ?>
            <td style="font-weight: <?=$gras ?>;color:<?=$rouge ?>"><?="$i - $j"?></td>
        <?php }?>
        </tr>

      <?php }?>
    </tbody>
</table>

<?php
include "include/footer.php";
 ?>