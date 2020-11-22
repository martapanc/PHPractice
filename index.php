<?php

include 'header.php';
require 'config.php';

if (!empty($config)) {
    echo '<br/>' . $config['host'];
}
