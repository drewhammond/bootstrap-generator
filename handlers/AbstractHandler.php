<?php
abstract class AbstractHandler
{
    protected $templatePath = 'templates/';
    protected $templateExtension = '.tpl.php';
    protected $layoutName = 'layouts/default';
    
    public function render($templateName, $templateVariables = array())
    {
        if (isset($templateVariables['title_for_layout'])) {
            $title_for_layout = $templateVariables['title_for_layout'];
            unset($templateVariables['title_for_layout']);
        }
        
        $content = new Template($this->templatePath);
        $content->setVars($templateVariables);
        
        $layout = new Template($this->templatePath);
        $layout->setVars(array(
            'title_for_layout' => $title_for_layout,
            'content_for_layout' => $content->fetch($templateName . $this->templateExtension)
        ));
        $layout->display($this->layoutName . $this->templateExtension);
    }
}