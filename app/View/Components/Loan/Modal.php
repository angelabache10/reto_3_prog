<?php

namespace App\View\Components\Loan;

use App\Models\Item;
use Illuminate\View\Component;

class Modal extends Component
{
    public $items;
    public $clubs;
    public $stock;

    public function __construct($clubs)
    {
        $data = Item::optionsAndStock();

        $this->items = $data->options;
        $this->stock = $data->stock;
        $this->clubs = $clubs;
    }

    public function render()
    {
        return view('components.loan.modal');
    }
}
