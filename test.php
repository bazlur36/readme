<?php

require_once('src/Build.php');

$bi = New \ReadmeAPI\Build();
//$bi->config('asdofiahdsfajkfd','s3d3r3');
//$bi->run('math','square', array('numbers' => array(100,20,30)));
$bi->config('abdul_f9cfcade4264cba870585a','');
//echo ($bi->run('math@1.5','multiply', array('numbers' => array(1,2,3))));
echo ($bi->run('temp-deprecated','sayHello', array('name' => 'Greg')));
