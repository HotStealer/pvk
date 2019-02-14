<?php
require_once 'conf.php';
/*echo '<pre>';
print_r($sess);
echo'</pre>';
*/
$mainTmp1= new Template('main');

$mainTmp1->set('title', 'Menu Application');


$contentTmp1 = new Template('content');

$mainTmp1->set('content',$contentTmp1->parse());

$mainTmp1Content = $mainTmp1->parse();
echo $mainTmp1Content;
