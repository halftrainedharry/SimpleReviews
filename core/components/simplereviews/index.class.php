<?php
abstract class SimpleReviewsBaseManagerController extends modExtraManagerController {
    /** @var \SimpleReviews\SimpleReviews $simplereviews */
    public $simplereviews;

    public function initialize(): void
    {
        $this->simplereviews = $this->modx->services->get('simplereviews');

        $this->addCss($this->simplereviews->getOption('cssUrl') . 'mgr.css');
        $this->addJavascript($this->simplereviews->getOption('jsUrl') . 'mgr/simplereviews.js');

        $this->addHtml('
            <script type="text/javascript">
                Ext.onReady(function() {
                    simplereviews.config = '.$this->modx->toJSON($this->simplereviews->config).';
                });
            </script>
        ');

        parent::initialize();
    }

    public function getLanguageTopics(): array
    {
        return array('simplereviews:default');
    }

    public function checkPermissions(): bool
    {
        return true;
    }
}
