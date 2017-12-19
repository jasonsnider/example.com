<?php

$meta = [];
$meta['title'] = 'Jason\'s Website';
$meta['description'] = 'Hello, my name is Jason';
$meta['keywords'] = 'Jason, Jason Snider';

$content = <<<EOT
<h1>Hello World</h1>
<p>Welcome to my web site.</p>
EOT;

require '../core/layout.php';
