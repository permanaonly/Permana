<?php  

    $nik = $_POST['nik'];
    $nama = $_POST['name'];


    $data = file('config.txt', FILE_IGNORE_NEW_LINES);

    foreach ($data as $value ) {
        $pecah = explode("|",$value);

        if ($nik == $pecah[0]) {
            $cek = true;
        }
    }


if ($cek) { ?>
    <script type="text/javascript">
       alert('sorr your nik almost registered')
       window.location.assign('register.php');
    </script>
<?php } else {
    $format = "\n$nik|$nama";

    $file = fopen('config.txt','a');

    fwrite($file,$format);
    fclose($file);
    ?>

    <script type="text/javascript">
        alert('Your accont has been Regitered, Please Login')
        window.location.assign('index.php');
    </script>
<?php  };

?>

