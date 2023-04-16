<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ItemRepository;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
