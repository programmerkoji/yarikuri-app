<?php

namespace App\Http\Repositories;

use App\Models\Item;
use Illuminate\Suppoort\Facades\DB;

class ItemRepository
{
    /**
     * @var Item
     */
    protected $item;

    /**
     * @param Item
     */
    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    /**
     * @param $item
     */
    public function index()
    {
        return $this->item->get();
    }

    /**
     * @param array $data
     */
    public function store($data)
    {
        try {
            DB::beginTransacation();
            $item = new Item;
            $item->fill($data)->save();
            DB::commit();
        } catch (\Throwable $th) {
            Log::error($th);
            DB::rollback();
        }
    }
}
