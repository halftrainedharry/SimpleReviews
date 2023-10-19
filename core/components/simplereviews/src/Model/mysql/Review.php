<?php
namespace SimpleReviews\Model\mysql;

use xPDO\xPDO;

class Review extends \SimpleReviews\Model\Review
{

    public static $metaMap = array (
        'package' => 'SimpleReviews\\Model\\',
        'version' => '3.0',
        'table' => 'simplereviews_review',
        'extends' => 'xPDO\\Om\\xPDOSimpleObject',
        'tableMeta' => 
        array (
            'engine' => 'InnoDB',
        ),
        'fields' => 
        array (
            'author' => '',
            'content' => '',
            'published' => 0,
            'createdon' => NULL,
        ),
        'fieldMeta' => 
        array (
            'author' => 
            array (
                'dbtype' => 'varchar',
                'phptype' => 'string',
                'precision' => '150',
                'null' => false,
                'default' => '',
            ),
            'content' => 
            array (
                'dbtype' => 'text',
                'phptype' => 'string',
                'null' => false,
                'default' => '',
            ),
            'published' => 
            array (
                'dbtype' => 'tinyint',
                'precision' => '1',
                'attributes' => 'unsigned',
                'phptype' => 'integer',
                'null' => false,
                'default' => 0,
            ),
            'createdon' => 
            array (
                'dbtype' => 'datetime',
                'phptype' => 'datetime',
                'null' => true,
            ),
        ),
    );

}
