<?php

namespace App\Model;

use App\Model;
use App\MultiException;

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
    public $author_id;

    public function fill(array $data)
    {

        $errors = new MultiException();

        if (empty($data['title'])) {
            $errors->add(new \Exception('Заголовок не может быть пустым!'));
        }

        if (empty($data['content'])) {
            $errors->add(new \Exception('Нет содержания статьи!'));
        }


        if (count($errors) > 0) {
            throw $errors;
        }

        $this->title = $data['title'];
        $this->content = $data['content'];

    }

    public function __get($name)
    {
        if ($name == 'author') {
            $name = Author::findById($this->author_id)->name;
            if (false == $name) {
                $name = 'Не известен.';
            }
            return $name;
        }
    }

    public function __isset($name)
    {
        if ($name == 'author' && !empty($this->author_id)) {
            return true;
        } else {
            return false;
        }
    }

}