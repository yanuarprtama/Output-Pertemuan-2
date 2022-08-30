<!DOCTYPE html>
<html>
	<head>
		<title> HTML </title>
	</head>
	<body>
		<?php
        function sapaPengunjung ($nama, $tempat, int $jumlahSapaan = 1) {
            for ($i=1; $i<=$jumlahSapaan; $i++) { 
                echo "<br>{$i}. Selamat datang, {$nama}, di-{$tempat}";
            }
            echo "<br><p>Terima kasih telah berkunjung ke tempat kami.</p>";
        }
        sapaPengunjung("Yanuar", "coffeeshop", 5);
        sapaPengunjung("Bagus", "mitra swalayan", 10);
        sapaPengunjung("Ferdy", "mall", 7);
        ?>
	</body>
</html>