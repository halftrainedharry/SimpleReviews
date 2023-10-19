<?php
use SimpleReviews\Model\Review;

$tpl = $modx->getOption('tpl', $scriptProperties, 'SimpleReviewsTemplate');

$c = $modx->newQuery(Review::class);
$c->sortby('createdon', 'DESC');
$reviews = $modx->getCollection(Review::class, $c);

$output = '';
foreach ($reviews as $review) {
    $output .= $modx->getChunk($tpl, $review->toArray());
}
return $output;