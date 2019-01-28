<?php
require_once 'db/conf.php';
require_once 'db/db_fnk.php';
$iktConn = connect_db(DBHOST,DBUSER,DBPASS,DBNAME);
require_once 'menus/menu.php';
require_once 'lib/fnk.php';
pais();

menu(array(
   'praed' => $praed,
   'supid' => $supid,
   'magus' => $magus,
   'joogid' => $joogid,

));

jalus();
?>