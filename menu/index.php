<?php
require_once 'conf.php';
/*echo '<pre>';
print_r($sess);
echo'</pre>';
*/
$mainTmpl= new Template('main');

$mainTmpl->set('title', 'Menu Application');


$contentTmpl = new Template('content');

$courseCardTmpl = new Template('course_card');

$contentTmpl->add('course_card',$courseCardTmpl->parse());
$contentTmpl->add('course_card',$courseCardTmpl->parse());
$contentTmpl->add('course_card',$courseCardTmpl->parse());
$contentTmpl->add('course_card',$courseCardTmpl->parse());

$mainTmpl->set('content',$contentTmpl->parse());

$mainTmplContent = $mainTmpl->parse();
echo $mainTmplContent;
