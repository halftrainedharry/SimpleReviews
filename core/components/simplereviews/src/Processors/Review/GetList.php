<?php
namespace SimpleReviews\Processors\Review;

use MODX\Revolution\Processors\Model\GetListProcessor;
use SimpleReviews\Model\Review;

class GetList extends GetListProcessor
{
    public $classKey = Review::class;
    public $objectType = 'simplereviews.review';
    public $languageTopics = ['simplereviews:default'];

    public $defaultSortField = 'createdon';
    public $defaultSortDirection = 'DESC';
}