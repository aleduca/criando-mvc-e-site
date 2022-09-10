<?php

$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory(ROOT.'/app/models');
$cfg->set_connections(array('development' =>
'mysql://root:root@localhost/mvc'));