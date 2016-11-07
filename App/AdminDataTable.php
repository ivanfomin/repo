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

    protected $rows;
    protected $cols;

    public function __construct(array  $models,array $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }

    public function fillCells()
    {
        foreach ($this->models as $model) {
            foreach ($this->functions as $function) {
                $this->cells[] = $function($model);
            }
        }
    }

    public function render($template)
    {
        ob_start();
        include $template;
        $table = ob_get_contents();
        ob_end_clean();
        return $table;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param mixed $rows
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    /**
     * @return mixed
     */
    public function getCols()
    {
        return $this->cols;
    }

    /**
     * @param mixed $cols
     */
    public function setCols($cols)
    {
        $this->cols = $cols;
    }





}