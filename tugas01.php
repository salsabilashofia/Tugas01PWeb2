<form action="" method="POST">
   Masukkan Nilai : <input type="text" name="nilai">
    <?php
      if ($_POST)
      {
        $nilai = $_POST['nilai'];
        if ($nilai >= 80) {
          $grade = "A"; }
        elseif ($nilai >= 70) {
          $grade = "B"; }
        elseif ($nilai >= 60) {
          $grade = "C"; }
        else {
          $grade = "D"; }
        echo "Huruf : " . $grade;
      }
    ?>
</form>
