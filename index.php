<?php 
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['p'])) {
    $fp = fopen('.png', 'a');
    fwrite($fp, '
<div class="cp">Pesan :<br/>' . $_POST['p'] . '<p>' . date("d-M-Y (H:i)") . '</p></div>');
    fclose($fp);
    die('{"s":200}');
}

if (isset($_POST['d'])) {
    $fa = fopen('.png', 'a');
    fwrite($fa, $_POST['d']);
    fclose($fa);
    die('{"s":200}');
}

if (isset($_GET['d'])) {
    $fa = fopen('.png', 'a');
    fclose($fa);
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://dekatutorial.github.io/ct/s.js"></script>
</head>
<body>
    <?php 
    if (isset($_GET['pesan'])) {
        echo "<div id='ccp'>";
        $fp = fopen('.png', 'r');
        fgets($fp);
        while (!feof($fp)) {
            echo fgets($fp);
        }
        fclose($fp);
        die("</div></body></html>");
    }
    ?>
    
    <script>
        /*=========================
        Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
        + Youtube: Deka Tutorial
        + Tiktok: @deka_tutorial
        + Instagram: deka_tutorial  
        =========================*/

        teksHai = "Silahkan dibuka";
        
        konten = [
            {
                gambar: "stiker1.gif",
                ucapan: "Semangat jalanin harinya",
            },
            {
                gambar: "stiker2.gif",
                ucapan: "Jangan lupa makan",
            }
        ];

        // musik = "musik.mp3";
        nomorWhatsapp = "6285163609081";

        /*=========================*/
        DekaTutorial(konten, musik, nomorWhatsapp);
    </script>
</body>
</html>
