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
    protected $month;

        /**
     * @param MonthRepository
     */
    public function __construct(MonthRepository $month)
    {
        $this->MonthRepository = $month;
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

    /**
     * @param int $id
     */
    public function edit(int $id)
    {
        $month = $this->MonthRepository->findById($id);
        return view('months.edit', compact('month'));
    }

    /**
     * @param MonthPostRequest $request
     * @param int $id
     */
    public function update(MonthPostRequest $request, int $id)
    {
        $this->MonthRepository->update($request->validated(), $id);

        return redirect()
            ->route('months.index')
            ->with('message', '年月を更新しました');
    }
}
