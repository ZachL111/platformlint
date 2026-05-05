<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(80, 95, 23, 9, 8);
assert(Policy::score($signal_case_1) === 189);
assert(Policy::classify($signal_case_1) === "accept");
$signal_case_2 = new Signal(59, 76, 17, 15, 10);
assert(Policy::score($signal_case_2) === 128);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(72, 88, 23, 17, 4);
assert(Policy::score($signal_case_3) === 102);
assert(Policy::classify($signal_case_3) === "review");
