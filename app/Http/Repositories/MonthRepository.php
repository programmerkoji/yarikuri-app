<?php

namespace App\Http\Repositories;

use App\Models\Month;
use Illuminate\Suppoort\Facades\DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Log;

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
     *
     */
    public function index()
    {
        return $this->month->get();
    }

    /**
     * @param array $data
     */
    public function store(array $data)
    {
        try {
            FacadesDB::beginTransaction();
            $month = new Month;
            $month->fill($data)->save();
            FacadesDB::commit();
        } catch (\Throwable $th) {
            Log::error($th);
            FacadesDB::rollback();
        }
    }
}
