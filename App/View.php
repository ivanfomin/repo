<?php

namespace App;

/**
 * Class View
 * @package App
 * @property $news
 *
 */
class View implements \Countable, \Iterator
{
    use Magic;
    protected $twig;

    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../templates');
        $this->twig = new \Twig_Environment($loader, ['cache' => false]);
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->data);
    }

    public function current()
    {
        return current($this->data);
    }

    public function next()
    {
        next($this->data);
    }

    public function key()
    {
        return key($this->data);
    }

    public function valid()
    {
        return null !== key($this->data);
    }

    public function rewind()
    {
        reset($this->data);
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

    public function displayOne($template)
    {

        ob_start();
        include $template;
        $html = ob_get_contents();

        ob_end_clean();
        echo $html;
    }

    public function displayTwig($page)
    {
        echo $this->twig->render($page, $this->data);
    }

}