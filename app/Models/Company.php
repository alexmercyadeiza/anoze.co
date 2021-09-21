<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function filling_station()
    {
        return $this->hasMany(FillingStations::class, 'cid');
    }

    public function fuel_prices()
    {
        return $this->hasMany(FuelPrices::class, 'cid');
    }

    public function tellers()
    {
        return $this->hasMany(Tellers::class, 'cid');
    }

    public function sales()
    {
        return $this->hasMany(Sales::class, 'cid');
    }

    public function expenses()
    {
        return $this->hasMany(Expenses::class, 'cid');
    }

    public function fuel_levels()
    {
        return $this->hasMany(FuelLevels::class, 'cid');
    }
}
