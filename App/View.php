<?php

namespace App;

/**
 * Class View
 * @package App
 * @property $news
 *
 */
class View implements \Countable
{
    use Magic;

    /**
     * @return int
     */
    public function count()
    {
        return count($this->data);
    }

    /**
     * @param string $template
     */
    public function display($template)
    {
        echo $this->render($template);
    }

    /**
     * @param string $template
     * @return string
     */
    public function render($template)
    {
        ob_start();
        foreach ($this->data as $item => $value) {
            $$item = $value;
        }
        include $template;
        $html = ob_get_contents();
        ob_end_clean();
        return $html;
    }


}