<?php
require_once dirname(dirname(__FILE__)) . '/index.class.php';

class SimpleReviewsManageManagerController extends SimpleReviewsBaseManagerController
{

    public function process(array $scriptProperties = []): void
    {
    }

    public function getPageTitle(): string
    {
        return $this->modx->lexicon('simplereviews');
    }

    public function loadCustomCssJs(): void
    {
        $this->addLastJavascript($this->simplereviews->getOption('jsUrl') . 'mgr/widgets/manage.panel.js');
        $this->addLastJavascript($this->simplereviews->getOption('jsUrl') . 'mgr/sections/manage.js');

        $this->addHtml(
            '
            <script type="text/javascript">
                Ext.onReady(function() {
                    MODx.load({ xtype: "simplereviews-page-manage"});
                });
            </script>
        '
        );
    }

    public function getTemplateFile(): string
    {
        return $this->simplereviews->getOption('templatesPath') . 'manage.tpl';
    }

}
