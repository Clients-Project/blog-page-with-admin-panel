<?php
// $date = strtotime("2022-01-08 12:04:58")
// echo $date->format('m/d/Y');
// echo $newdate;
// $new_date_format = date('l, d F Y', strtotime('2008-07-01T22:35:17.02'));
// echo $new_date_format;
$extension  = pathinfo( 'assets/img/arrow.gif', PATHINFO_EXTENSION );
echo $extension;
?>