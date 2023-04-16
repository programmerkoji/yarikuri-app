<?php

namespace App\Http\Repositories;

use App\Models\Month;
use Illuminate\Suppoort\Facades\DB;

class MonthRepository
{
    /**
     * @var Month
     */
    protected $month;

    /**
     * @param Month
     */
    public function __construct(Month $month)
    {
        $this->month = $month;
    }

    /**
     * @param $month
     */
    public function index()
    {
        return $this->month->get();
    }
}
