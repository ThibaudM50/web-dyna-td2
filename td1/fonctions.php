@@ -1,5 +1,24 @@
<?php
function div($message){
    return '<span>'.$message.'</span>';
}
function createHtmlTable($nbLignes,$nbColonnes){
  ?>
  <table border='1'>
      <tbody>
        <?php for($i=0;$i<$nbLignes;$i++){
          $gras=($i%2==0)?"bold":"normal";
        ?>
          <tr>
          <?php for($j=0;$j<$nbColonnes;$j++){
              $couleur=($j%2==0)?"red":"black";
              ?>
              <td style="font-weight: <?=$gras ?>;color:<?=$couleur ?>"><?="$i - $j"?></td>
          <?php }?>
          </tr>
        <?php }?>
      </tbody>
  </table>
  <?php
}
 ?>