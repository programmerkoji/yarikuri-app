<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ItemMonthRepository;
use App\Http\Services\ItemService;
use App\Http\Services\MonthService;

class DashboardController extends Controller
{
    /**
     * @var ItemService
     */
    protected $itemService;

    /**
     * @var MonthService
     */
    protected $monthService;

    /**
     * @var ItemMonthRepository
     */
    protected $itemMonthRepository;

    /**
     * @param ItemService
     * @param MonthService
     * @param ItemMonthRepository
     */
    public function __construct(ItemService $itemService, MonthService $monthService, ItemMonthRepository $itemMonthRepository)
    {
        $this->itemService = $itemService;
        $this->monthService = $monthService;
        $this->itemMonthRepository = $itemMonthRepository;
    }

    /**
     * @return void
     */
    public function index()
    {
        $items = $this->itemService->index();
        $months = $this->monthService->sortByMultipleColumns();

        return view('dashboard', compact('items', 'months'));
    }
}
