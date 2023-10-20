<?php
use SimpleReviews\Model\Review;

$formFields = $hook->getValues();
$author = $formFields['author'];
$content = $formFields['content'];
// TODO: SANITIZE USER DATA
// Sanitize all user input before saving it.
// Don't output unvetted user input directly to the front-end to avoid security issues.

$review = $modx->newObject(Review::class);
$review->set('author', $author);
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