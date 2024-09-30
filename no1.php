<html>
	  <head>
	    <title>LKPD NO 1</title>
	  </head>
	  <body>   	
		<!-- form to input text -->
		<form method="post">
			<!-- label for input text -->
			<label for="teks">Masukkan Teks</label><br/>
			<!-- input text -->
			<input type="text" name="teks" id="teks"><br/>
			<!-- submit button -->
			<input type="submit" value="cek">
		</form>
		<?php
			// get post value from input text
			$teks = $_POST['teks'] ?? ''; 
			// remove all non number character from text
			$onlyNumbers = preg_replace('/[^0-9]/', '', $teks);

			// if text contain number
			if ($onlyNumbers) {
				// print the number
				echo "Teks mengandung angka: " . implode(", ", str_split($onlyNumbers));
			} else {
				// print if text not contain number
				echo "Teks tidak mengandung angka.";
			}
		?>
	</body>
	</html>
