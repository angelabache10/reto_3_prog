<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Item;

class ItemStockController extends Controller
{
    public function index()
    {
        $items = Item::latest()
            ->with('operations')
            ->paginate(10)
            ->withQueryString();

        return view('items-stock.index', [
            'items' => $items,
            'clubs' => Club::getOptions(),
        ]);
    }
}
