<?php


class View implements Countable
{
    use Magic;

    public function count()
    {
        return count($this->data);
    }

    public function display($template)
    {
        include $template;
    }


}