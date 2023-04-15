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

    /**
     * @param array $data
     */
    // public function store($data)
    // {
    //     try {
    //         DB::beginTransacation();
    //         $month = new Month;
    //         $month->fill($data)->save();
    //         DB::commit();
    //     } catch (\Throwable $th) {
    //         Log::error($th);
    //         DB::rollback();
    //     }
    // }
}
