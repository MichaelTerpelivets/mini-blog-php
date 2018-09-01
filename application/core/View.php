<?php

/**
 * Class View
 */
class View
{
    /**
     * Default themes
     * @var string
     */
    protected $templates_view = 'main_view.php';

    /**
     * Method render view
     * @param string $content_view
     * @param null $template_view
     * @param null $data
     */
    public function render_view(string $content_view, $template_view = null, $data = null)
    {
        if (!is_null($template_view)) {
            $this->template_view = $template_view;
        }
        include_once "../application/view/layouts/" . $this->templates_view;
    }
}