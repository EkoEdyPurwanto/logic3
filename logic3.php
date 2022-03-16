<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logic3.css">
    <title>logic3</title>
</head>
<body>
    <div class="container">
    <div class="atas">
    <!-- 3,1 -->
    <table border="1" cellpadding="14" cellspacing="0">
    <?php
 for ( $i=1; $i <= 9; $i++ ) {
    echo "<tr>";

    for ( $ganjil=1; $ganjil <= 9; $ganjil++) {

        if ( $ganjil==$i ) {
           echo "<td>" . (($i * 2) - 1) . "</td>";
       }
       else{
           echo "<td> - </td>";
         }

    }
    echo "</tr>";
}
    ?>
    </table>


    <!-- 3,2 -->
    <table border="1" cellpadding="14" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $genap=1; $genap <= 9; $genap++) {

         if ( 9 - $i - -1 == $genap ) {
            echo "<td>" . (($genap * 2 -2 ) - 0) . "</td>";
        }
        else{
            echo "<td> - </td>";
          }

     }
     echo "</tr>";
 }
?>
</table>



<!-- 3,3 -->
<table border="1" cellpadding="14" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++) {

        if ( $j==$i ) {
            echo "<td>" . (($i * 2) - 1) . "</td>";
        }

        elseif ( 9 - $i - -1 == $j ) {
            echo "<td>" . (($j * 2 - 2 ) - 0) . "</td>";
        }

        else{
            echo "<td> - </td>";
          }

     }
 }
?>
</table>
</div>


<!-- 3,4 -->
<div class="bawah">
<table border="1" cellpadding="14" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++) {

        if ( $j==$i ) {
            echo "<td>"  . (($i * 2) - 1) . " </td>";
        }

         elseif ( $j<=$i) {
            echo "<td> A </td>";
        }
        else{
            echo "<td> - </td>";
          }

     }
 }
?>
</table>

<!-- 3,5 -->
<table border="1" cellpadding="13" cellspacing="0">

<?php
 for ( $i=1; $i <=9; $i++ ) {
     echo "<tr>";

     for ( $j=1; $j <= 9; $j++) {

        if ( $j==$i ) {
            echo "<td>"  . (($i * 2) - 1) . " </td>";
        }

         elseif ( $j<=$i) {
            echo "<td> A </td>";
        }

        elseif ( $j>=$i) {
            echo "<td> B </td>";
        }

        else{
            echo "<td> - </td>";
          }

     }
 }
?>
</table>


<!-- 3,6 -->

<table border="1" cellspacing="0" cellpadding="0">
<?php for ($baris = 1; $baris <= 9; $baris++): ?>
	<tr>
		<?php for ($kolom = 1; $kolom <= 9; $kolom++): ?>
        	<td style="width: 2em; text-align: center; padding: 5px;">
              <?php
              if ($baris == 0) { //baris 0
                  if ($kolom == 0) {
                      echo '   ';
                  }
                  else {
                      echo ' '.$kolom.' ';
                  }
              }
              //baris 1-9
              else {
                  $nilai_diagonal = $baris * 2 - 1;
                  $nilai_diagonal_2 = (9 - $baris) * 2;

                  if ($kolom == 0) { // sisi kiri
                      echo ' '.$baris.' ';
                  } elseif ($baris == $kolom) { // diagonal utama
                      echo $nilai_diagonal; 
                  } elseif ($baris != 5 && $baris == (10 - $kolom)) { // diagonal kebalikan kecuali baris 5
                      echo $nilai_diagonal_2; 
                  } elseif (($baris <= 5 && $kolom < $baris) || ($baris > 5 && $kolom < (10 - $baris)) ) { // sisi kiri diagonal
                      echo ' A ';
                  } elseif (($baris <= 5 && 10 < ($baris + $kolom)) || ($baris > 5 && $baris < $kolom)) { // sisi kanan diagonal
                      echo ' B '; 
                  } else { // sisanya
                      echo ' - ';
                  }
              } ?>
        	</td>
    	<?php endfor; ?>
	</tr>
<?php endfor; ?>
</table>

</div>
</div>
</body>
</html>