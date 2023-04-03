<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\ItemRepository;

class DashboardController extends Controller
{
    /**
     * @var ItemRepository
     */
    protected $item;

    /**
     * @param ItemRepository
     */
    public function __construct(ItemRepository $item)
    {
        return $this->ItemRepository = $item;
    }

    /**
     * @return void
     */
    public function item()
    {
        $items = $this->ItemRepository->index();
        return view('dashboard', compact('items'));
    }


}
