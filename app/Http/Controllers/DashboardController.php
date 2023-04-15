<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\ItemRepository;
use App\Http\Repositories\MonthRepository;

class DashboardController extends Controller
{
    /**
     * @var ItemRepository
     */
    protected $item;

    /**
     * @var MonthRepository
     */
    protected $month;

    /**
     * @param ItemRepository
     * @param MonthRepository
     */
    public function __construct(ItemRepository $item, MonthRepository $month)
    {
        $this->ItemRepository = $item;
        $this->MonthRepository = $month;
    }

    /**
     * @return void
     */
    public function index()
    {
        $items = $this->ItemRepository->index();
        $months = $this->MonthRepository->index();
        return view('dashboard', compact('items', 'months'));
    }
}
