<?php
namespace SimpleReviews\Processors\Review;

use MODX\Revolution\Processors\Model\UpdateProcessor;
use SimpleReviews\Model\Review;

class Publish extends UpdateProcessor
{
    public $classKey = Review::class;
    public $objectType = 'simplereviews.review';
    public $languageTopics = ['simplereviews:default'];

    public function process()
    {
        $this->object->set('published', true);

        if ($this->object->save() === false) {
            return $this->failure($this->modx->lexicon($this->objectType . '_err_save'));
        }

        return $this->success('', $this->object);
    }
}