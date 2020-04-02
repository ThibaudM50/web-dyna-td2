?php
$title='Exercice n°4 (Itérations)';
include "include/header.php";
?>
<a href="?l=2&c=2">Tableau 2 x 2</a><br>
<a href="?l=5&c=5">Tableau 5 x 5</a><br>
<a href="?l=10&c=8">Tableau 10 x 8</a><br>
<hr>
<?php 
$title='exercice 4 (Itérations)';
include "include/header.php";
<?php>
$nbLignes=$_GET["l"]??15;
$nbColonnes=$_GET["c"]??15;
echo "<h2>Tableau de $nbLignes par $nbColonnes</h2>";
?>
<table border='1'>
  <tbody>
    <?php for($i=0;$i<$nbLignes;$i++){?>
    <?php for($i=0;$i<$nbLignes;$i++){
      $gras=($i%2==0)?"bold":"normal";
    ?>
      <tr>
      <?php for($j=0;$j<$nbColonnes;j++){?>
        <td><?="$t - $y"?></td>
        <td style="font-weight: <?=$gras ?>"<?="$t - $y"?></td>
      <?php }?>
      </tr>
    <?php }?>
  </tbody>

</table> 
    <tbody>
      <?php for($i=0;$i<$nbLignes;$i++){
        $gras=($i%2==0)?"bold":"normal";
      ?>
        <tr>
        <?php for($j=0;$j<$nbColonnes;$j++){
            $couleur=($j%2==0)?"red":"black";
            ?>
            <td style="font-weight: <?=$gras ?>;color:<?=$couleur ?>"><?="$t - $y"?></td>
        <?php }?>
        </tr>
      <?php }?>
    </tbody>
</table>

<?php
include "include/footer.php";
?>
 ?>