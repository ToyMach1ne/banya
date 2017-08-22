<?php
include_once( pathinfo( __FILE__ , PATHINFO_DIRNAME ).'/library/Plugin.php' );
$pluginClass=new Blogclone();
$pluginClass->del( __FILE__ );
?>