<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(45, 43, 24, 55);
assert(DomainReviewLens::score($item) === 116);
assert(DomainReviewLens::lane($item) === "watch");
