<?php
require_once 'conf.php';
/*echo '<pre>';
print_r($sess);
echo'</pre>';
*/
$mainTmp1= new Template('main');

$mainTmp1->set('title', 'Menu Application');
$mainTmp1->set('page title', 'Tartu KHK Menu');
$mainTmp1Content = $mainTmp1->parse();

echo $mainTmp1Content;
