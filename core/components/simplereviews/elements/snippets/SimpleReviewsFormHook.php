<?php
use SimpleReviews\Model\Review;

$formFields = $hook->getValues();
$content = $formFields['content'];
//TODO: sanitize content

$review = $modx->newObject(Review::class);
$review->set('author', $formFields['author']);
$review->set('content', $content);
$review->set('published', false);
$review->set('createdon', time());

if ($review->save()){
    return true;
} else {
    $modx->log(\xPDO\xPDO::LOG_LEVEL_ERROR, "Review couldn't be saved.");
    $hook->addError("SimpleReviewsFormHook", "Review couldn't be saved.");
    return false;
}