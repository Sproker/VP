<?php
  $username = "Jan-Erik";
  $fulltimenow = date("d.m.Y H:i:s");
  $hournow = date("H");
  $partofday = "lic aeg";
  if($hournow < 6){
	  $partofday = "uneaeg";  
  }//enne 6
  if($hournow >= 8 and $hournow <= 18){
	  $partofday = " piinamise aeg"; 
  }
  
  //vaatame semestri kulgemist
  $semesterstart = new DateTime ("2020-8-31");
  $semesterend = new Datetime("2020-12-13");
  $semesterduration = $semesterstart ->diff($semesterend);
  $semesterdurationdays = $semesterduration->format("%r%a");
  $today = new DateTime("now");
?>

<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title><?php echo $username; ?> programmeerib veebi</title>

</head>
<body>
  <h1><?php echo $username; ?></h1>
  <p>See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p>See leht loodi veebiprogrammeerimise kursusel aasta 2020 sügissemsteril <a href="https://www.tlu.ee">Tallinna Ülikooli </a>Digitehnoloogiate instiduudis.</p> 
  <p>Lehe avamise hetk: <?php echo $fulltimenow; ?>.</p>
  <p><?php echo "Praegu on" .$partofday."."; ?></p>
</body>
</html>