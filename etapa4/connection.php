<?php

$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory(ROOT.'/App/Models');
$cfg->set_connections(array('development' =>
'mysql://root:root@localhost/mvc'));