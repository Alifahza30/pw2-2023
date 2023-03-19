<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code..

		// Memanggil class Balok
		require_once 'class_balok.php';
		
		// Membuat 4 objek Balok dengan ukuran yang berbeda-beda
		$balok1 = new Balok(10, 5, 3);
		$balok2 = new Balok(7, 8, 6);
		$balok3 = new Balok(15, 4, 9);
		$balok4 = new Balok(29, 16, 7);
		
		// Menampilkan luas, keliling, dan volume dari setiap objek
		echo "Balok 1 <br>";
		echo "Luas: " . $balok1->getLuas() . "<br>";
		echo "Keliling: " . $balok1->getKeliling() . "<br>";
		echo "Volume: " . $balok1->getVolume() . "<br><br>";
		
		echo "Balok 2 <br>";
		echo "Luas: " . $balok2->getLuas() . "<br>";
		echo "Keliling: " . $balok2->getKeliling() . "<br>";
		echo "Volume: " . $balok2->getVolume() . "<br><br>";

		echo "Balok 3 <br>";
		echo "Luas: " . $balok3->getLuas() . "<br>";
		echo "Keliling: " . $balok3->getKeliling() . "<br>";
		echo "Volume: " . $balok3->getVolume() . "<br><br>";

		echo "Balok 4 <br>";
		echo "Luas: " . $balok4->getLuas() . "<br>";
		echo "Keliling: " . $balok4->getKeliling() . "<br>";
		echo "Volume: " . $balok4->getVolume() . "<br><br>";

?>