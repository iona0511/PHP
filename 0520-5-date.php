<?php
header("Cpntent-Type:text/plain");

date_default_timezone_set('Asia/Taipei');
echo date("Y-m-d H:i:s")."\n";
echo time()."\n";
echo date("Y-m-s H:i:s", time()+30*24*60*60)."\n";
echo strtotime('2022-05-21')."\n";
