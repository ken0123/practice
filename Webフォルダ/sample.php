<?php
include("class/MyTemplate.class.php");
$tpl = new MyTemplate();
$tpl->name  = '悟空軒';
$tpl->foods = array('ラーメン', '餃子', '焼き飯', '麻婆豆腐');
$tpl->show('template/sample.tpl.html');
?>