<?php
  $username = "Veebileht";
  $fulltimenow = date("d.m.Y H:i:s");
  $hournow = date("H");
  $partofday = "lic aeg";
  $partofsemester = "lihtsalt aeg";
  if($hournow <= 5){
	  $partofday = "öö";  
  }
  if($hournow >= 6 and $hournow <= 7){
	  $partofday = "äratus";
  }	  
  if($hournow >= 8 and $hournow <= 15){
	  $partofday = "loengu aeg"; 
  }
  if($hournow >= 16 and $hournow <= 18){
      $partofday = "kojumineku ning puhkuse aeg";
  }
  if($hournow >= 19 and $hournow <= 22){
      $partofday = "õppimise aeg";
  }
  if($hournow >= 23){
      $partofday = "öörahu";
  } 
  //vaatame semestri kulgemist  
  $semesterstart = new DateTime("2020-8-31");
  $semesterend = new DateTime("2020-12-13");
  $semesterduration = $semesterstart->diff($semesterend);
  $semesterdurationdays = $semesterduration->format("%r%a");
  $today = new DateTime("now");
  if ($semesterstart <= $today){
	  $partofsemester = "Semester on täies hoos";
  }
  if ($semesterstart > $today){
	  $partofsemester = "Semester ei ole täies hoos enam";
  }	  
  //protsent
  $start = strtotime("31-08-2020");
  $finish = strtotime("13-12-2020");
  $diff = $finish - $start;
  $progress = time() - $start;
  $percentage = $progress * 100 / $diff;
  $percent = round($percentage);
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
</body>
<footer>
  <p>Lehe avamise hetk: <?php echo $fulltimenow; ?>.</p>
  <p><?php echo "Praegu on " .$partofday. "."; ?></p>
  <p><?php echo $partofsemester. "."; ?></p>
  <p><?php echo $semesterduration->format('Semestri lõpuni jäänud: %R%a päeva');?></p>
  <p>Semestrist on läbitud <?php echo $percent;?>%</p>
</footer>
</html>
