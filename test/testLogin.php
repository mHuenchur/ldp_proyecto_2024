<?php

require_once "../app/config/DBConfig.php";
require_once "../app/vendor/autoload.php";

use app\libs\connection\Connection;
use app\libs\autentication\Autentication;
/*
try{
    Autentication::login("mHuenchur", "clave123");
}
catch(Exception $ex){
    echo $ex->getMessage();
}*/

$html = '
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>A basic HTML table</h2>

<table style="width:100%">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
</table>

<p>To understand the example better, we have added borders to the table.</p>

</body>
</html>
';

require_once "../app/reports/testReport.php";