<form action="" method="POST">
   Masukkan Nilai : 
   <input type="number" name="nilai">
    <?php
      if ($_POST)
      {
        $nilai = $_POST['nilai'];
        if ($nilai >= 80) {
          $huruf = "A"; }
        elseif ($nilai >= 70) {
          $huruf = "B"; }
        elseif ($nilai >= 60) {
          $huruf = "C"; }
        else {
          $huruf = "D"; }
        echo "Huruf : " ;
        echo $huruf;
      }
    ?>
</form>
