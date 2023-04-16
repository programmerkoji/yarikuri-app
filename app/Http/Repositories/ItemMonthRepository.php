<?php

namespace App\Http\Repositories;

use App\Models\ItemMonth;
use Illuminate\Suppoort\Facades\DB;

class ItemMonthRepository
{
    /**
     * @var ItemMonth
     */
    protected $itemMonth;

    /**
     * @param ItemMonth
     */
    public function __construct(ItemMonth $itemMonth)
    {
        $this->itemMonth = $itemMonth;
    }

    /**
     * @param $itemMonth
     */
    public function index()
    {
        return $this->itemMonth->get();
    }
}
