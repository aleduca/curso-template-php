<?php

$data = ['name' => 'Alexandre', 'age' => 40];

ob_start();

extract($data);

require 'home.php';

$content = ob_get_contents();

ob_end_clean();

var_dump($content);
