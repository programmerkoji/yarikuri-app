<?php

namespace App\Http\Repositories;

use App\Models\Item;
use Illuminate\Suppoort\Facades\DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Log;

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
            FacadesDB::beginTransaction();
            $item = new Item;
            $item->fill($data)->save();
            FacadesDB::commit();
        } catch (\Throwable $th) {
            Log::error($th);
            FacadesDB::rollback();
        }
    }
}
