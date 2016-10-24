<?php

namespace App\Model;

use App\Model;

/**
 * Class Article
 * @package App\Model
 * @property $title
 * @property $content
 * @property $author
 *
 */
class Article
    extends Model
{

    public static $table = 'news';

    public $title;
    public $content;
    protected $author;

    public function __get($name)
    {
        if ($name == 'author') {
            $name = Author::findById($this->author)->name;
            if (false == $name) {
                $name = 'Не известен.';
            }
            return $name;
        }
    }

    public function __isset($name)
    {
        if($name == 'author') {
            return true;
        } else {
            return false;
        }
    }

}