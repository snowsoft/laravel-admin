<?php

namespace Encore\Admin\Grid\Actions;

use Encore\Admin\Actions\RowAction;

class Show extends RowAction
{

    public $icon = 'fa fa-eye';
       /**
     * @return array|null|string
     */
    public function name()
    {
        return __('admin.show');
    }

    /**
     * @return string
     */
    public function href()
    {
        return "{$this->getResource()}/{$this->getKey()}";
    }
}
