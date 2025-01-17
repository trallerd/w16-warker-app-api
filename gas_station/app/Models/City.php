<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    public function coordinates()
    {
        // to every city it must have a coordination too
        $this->hasOne(Coordinates::class);
    }

    // indicating the relationship with gas_station
    public function gasStation()
    {
        // to every city has a gas_station
        $this->hasOne(GasStation::class);
    }
}
