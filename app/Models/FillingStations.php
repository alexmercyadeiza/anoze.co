<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FillingStations extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class, 'fid');
    }

    public function fuel_prices()
    {
        return $this->hasMany(FuelPrices::class, 'fid');
    }

    public function tellers()
    {
        return $this->hasMany(Tellers::class, 'fid');
    }

    public function sales()
    {
        return $this->hasMany(Sales::class, 'fid');
    }

    public function expenses()
    {
        return $this->hasMany(Expenses::class, 'fid');
    }

    public function fuel_levels()
    {
        return $this->hasMany(FuelLevels::class, 'fid');
    }
}
