<?php
namespace Encore\Admin\Show;
use Encore\Admin\Show;

use Illuminate\Contracts\Support\Renderable;

use Encore\Admin\Show\AbstractField;


class Timeline extends Renderable
{
    /**
     * The view to be rendered.
     *
     * @var string
     */
    protected $view = 'admin::show.timeline';
    /**
     * Parent
     */
    protected $parent;
    public function __construct(Show $show)
    {
        $this->parent = $show;

    }

    /**
     * Render the timeline field.
     *
     * @return string
     */
    public function render()
    {
        return view($this->view)->render();
    }
}