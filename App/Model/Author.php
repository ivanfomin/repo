<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 24.10.16
 * Time: 2:15
 */

namespace App\Model;


use App\Model;

/**
 * Class Author
 * @package App\Model
 * @property $name
 */
class Author
    extends Model
{
    public static $table = 'authors';

    public $name;
}