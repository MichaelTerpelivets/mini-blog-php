<?php

/**
 * Class View
 */
class View
{
    protected $templates_view = 'main_view.php';

    /**
     * @param string $content_view
     * @param null $template_view
     * @param null $params
     */
    public function render_view(string $content_view, $template_view = null, $params = null)
    {
        if (!is_null($template_view)) {
            $this->template_view = $template_view;
        }
        include_once "../application/view/layouts/" . $this->templates_view;
    }
}