<?php 
session_start();
    $jam = $_POST['jam'];
    $tanggal = $_POST['tanggal'];
    $lok = $_POST['lokasi'];
    $suhu = $_POST['suhu'];
    $nik = $_SESSION['nik'];
    $nama = $_SESSION['nama'];

    $format = "\n$nik|$nama|$tanggal|$jam|$lok|$suhu";

    $file = fopen('catatan.txt', 'a');

    fwrite($file,$format);

    fclose($file);
?>

<script type="text/javascript">
    alert('data hass benn added')
    window.location.assign('user.php?url=travel_log')
</script>