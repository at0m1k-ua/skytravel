<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $table = 'travels';

    private const MONTHS = array(
        "січня",
        "лютого",
        "березня",
        "квітня",
        "травня",
        "червня",
        "липня",
        "серпня",
        "вересня",
        "жовтня",
        "листопада",
        "грудня",
    );

    public function getCitiesString(): string
    {
        return implode(' • ', $this->cities
            ->map(function (City $city) {return $city->name;})
            ->toArray());
    }

    private static function reformatDateString(string $date): string
    {
        $phpDateTime = Carbon::createFromFormat('Y-m-d', $date);
        return $phpDateTime->format("d") . " " . Travel::MONTHS[$phpDateTime->format("m") - 1];
    }

    public function getDatesIntervalString(): string
    {
        $startDateString = $this::reformatDateString($this->start_date);
        $endDateString = $this::reformatDateString($this->end_date);
        return "{$startDateString} - {$endDateString}";
    }

    public function getDatesIntervalDays(): int
    {
        $startDate = Carbon::createFromFormat('Y-m-d', $this->start_date);
        $endDate = Carbon::createFromFormat('Y-m-d', $this->end_date);
        return $endDate->diff($startDate)->days;
    }

    public function cities() {
        return $this->belongsToMany(City::class, 'travel_city', 'travel_id', 'city_id');
    }
}
