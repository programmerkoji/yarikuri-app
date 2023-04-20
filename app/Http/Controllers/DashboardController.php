<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ItemMonthRepository;
use Illuminate\Http\Request;
use App\Http\Repositories\ItemRepository;
use App\Http\Repositories\MonthRepository;
use App\Models\Item;
use App\Models\Month;

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
     * @var ItemMonthRepository
     */
    protected $itemMonth;

    /**
     * @param ItemRepository
     * @param MonthRepository
     * @param ItemMonthRepository
     */
    public function __construct(ItemRepository $item, MonthRepository $month, ItemMonthRepository $itemMonth)
    {
        $this->ItemRepository = $item;
        $this->MonthRepository = $month;
        $this->ItemMonthRepository = $itemMonth;
    }

    /**
     * @return void
     */
    public function index()
    {
        $items = $this->ItemRepository->getAllItems();
        $months = $this->MonthRepository->index();

        return view('dashboard', compact('items', 'months'));
    }
}
