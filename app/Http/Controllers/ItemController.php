<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ItemRepository;
use App\Http\Requests\ItemPostRequest;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * @var ItemRepository
     */
    protected $item;

        /**
     * @param ItemRepository
     */
    public function __construct(ItemRepository $item)
    {
        $this->ItemRepository = $item;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = $this->ItemRepository->index();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  $request
     */
    public function store(ItemPostRequest $request)
    {
        $this->ItemRepository->store($request->validated());

        return redirect()
            ->route('items.index')
            ->with('message', '項目を登録しました');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $item = $this->ItemRepository->findById($id);

        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItemPostRequest $request, int $id)
    {
        $this->ItemRepository->update($request->validated(), $id);

        return redirect()
            ->route('items.index')
            ->with('message', '項目を更新しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
