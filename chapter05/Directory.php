<?php

// Project/Module/Directory.php

namespace Project\Module;

$dir = new Directory();                 // 同じ名前空間では、名前空間を省略
$dir = new \Project\Module\Directory(); // グローバルからの絶対指定
