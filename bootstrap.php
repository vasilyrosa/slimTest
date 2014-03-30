<?php  

define(ROOT, $_SERVER['DOCUMENT_ROOT'].'/slimtest');




//require  ROOT.'/slim/vendor/autoload.php'; //config para ser usado com o localhost hthttp://localhost/slim/
require  ROOT.'/vendor/autoload.php'; //config para ser usado com o virtualhost http://slim-restiful.dev/
require  ROOT.'/autoload.php';
require  ROOT.'/connect/connect.php';


function site_url() {
	return 'http://'.$_SERVER['SERVER_NAME'].'/slimtest';
}