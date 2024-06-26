<?php

namespace Encore\Admin\Grid\Actions;

use Encore\Admin\Actions\RowAction;

class Edit extends RowAction
{

    public $icon = 'fa fa-pencil';

    /**
     * @return array|null|string
     */
    public function name()
    {
        return __('admin.edit');
    }

    /**
     * @return string
     */
    public function href()
    {
        return "{$this->getResource()}/{$this->getKey()}/edit";
    }
}
