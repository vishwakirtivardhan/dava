<?php
namespace Modules\CMS\View\Components;
use Illuminate\View\Component;
class input extends Component
{

    public $type;
    public $name;
    public $input_id;
    public $placeholder;
    public $divSize;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type="text",$name,$input_id,$placeholder="Enter Here",$divSize)
    {
        $this->type = $type;
        $this->name = $name;
        $this->input_id = $input_id;
        $this->divSize = $divSize;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('cms::components.input');
    }
}
