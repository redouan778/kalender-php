<h3>Kalender</h3>
<?php
$month = '';
$day = '';
$person ='';
foreach ($birthdays as $bday) {
  if( $month != $bday['month']){
    $month = $bday['month'];
    echo '<h1>' . date('F', mktime(0,0,0,$month,10)) . '</h1>';
  }
  if ($day != $bday['day']){
    $day = $bday['day'];
    echo '<h2>' . $day . '</h2>';
  }

  if ($person != $bday['person']){
    $person = $bday['person'];
    $year = $bday['year'];
    $current = 2018;
    $sum_total = $current - $year;
    echo '<p>' . $person . ' (' . $year . ' / ' . $sum_total . ')' . '</p>';
  }

}


 ?>
<a href='create'>+ Toevoegen</a>
