<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 07.11.16
 * Time: 14:24
 */

namespace App;


class AdminDataTable
{
    protected $models = [];
    protected $functions = [];
    protected $cells = [];
    protected $view;

    public function __construct(array  $models, array $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
        $this->view = new View();
        $this->fillCells();
    }

    protected function fillCells()
    {
        $this->cells[] = count($this->models); //кол-во строк
        $this->cells[] = count($this->functions); //кол-во столбцов
        foreach ($this->models as $model) {
            foreach ($this->functions as $function) {
                $this->cells[] = $function($model);
            }
            $this->view->cells = $this->cells;
        }
    }

    public function render($template)
    {
        $this->view->displayOne($template);
    }

}