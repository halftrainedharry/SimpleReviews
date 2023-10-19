<?php
/**
 * @var \MODX\Revolution\modX $modx
 * @var array $namespace
 */

// Add your classes to modx's autoloader
$modx->addPackage('SimpleReviews\\Model\\', $namespace['path'] . 'src/', null, 'SimpleReviews\\');

if (!$modx->services->has('simplereviews')) {
    // Register base class in the service container
    $modx->services->add('simplereviews', function($c) use ($modx) {
        return new \SimpleReviews\SimpleReviews($modx);
    });

    // Load packages model, uncomment if you have DB tables
}
