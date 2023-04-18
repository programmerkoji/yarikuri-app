<?php

namespace App\Http\Controllers;

use App\Http\Repositories\MonthRepository;
use App\Http\Requests\MonthPostRequest;
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
     *
     */
    public function create()
    {
        return view('months.create');
    }

    /**
     * @param MonthPostRequest $request
     */
    public function store(MonthPostRequest $request)
    {
        $this->MonthRepository->store($request->validated());

        return redirect()
            ->route('months.index')
            ->with('message', '年月を登録しました');
    }
}
