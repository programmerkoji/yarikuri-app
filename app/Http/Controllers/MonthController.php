<?php

namespace App\Http\Controllers;

use App\Http\Repositories\MonthRepository;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    /**
     * @var MonthRepository
     */
    protected $item;

        /**
     * @param MonthRepository
     */
    public function __construct(MonthRepository $item)
    {
        $this->MonthRepository = $item;
    }

    /**
     *
     */
    public function index()
    {
        $months = $this->MonthRepository->index();

        return view('months.index', compact('months'));
    }

    /**
     * @param
     */
    public function create()
    {
        return view('months.create');
    }
}
