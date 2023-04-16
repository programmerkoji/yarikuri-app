<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price'
    ];

    public function months()
    {
        return $this
            ->belongsToMany(Month::class, 'item_months')
            ->withPivot('is_checked');
    }

    /**
     * month_idがあるか確認
     *
     * @param [type] $month_id
     * @return boolean
     */
    public function isChecked($month_id)
    {
        return $this->months->contains('id', $month_id);
    }
}
