<!DOCTYPE html>
					<html>
					<head>
						<title>Döviz Kuru</title>
					</head>
					<body>
<?php 
				
					$kur = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");

foreach ($kur -> Currency as $cur) {
	if ($cur["Kod"] == "USD") {
		$usdAlis  = $cur -> ForexBuying;
		$usdSatis = $cur -> ForexSelling;
	}

	if ($cur["Kod"] == "EUR") {
		$eurAlis  = $cur -> ForexBuying;
		$eurAlis = $cur -> ForexSelling;
	}
}
 ?>
					
					
				<div style="width:15%">
                <h3>Döviz Kuru</h3>
                <hr>
                <b>USD Alış: </b> <?php echo $usdAlis; ?> <br>
                <b>USD Satış: </b> <?php echo $usdSatis; ?>
                <hr>
                <b>EURO Alış: </b> <?php echo $eurAlis; ?> <br>
                <b>EURO Satış: </b> <?php echo $eurAlis; ?>
                </div>

               
					</body>
					</html>