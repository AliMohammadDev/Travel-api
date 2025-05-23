<?php

namespace App\Http\Resources;

use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


/**
 * @mixin Travel
 * @property int $number_of_nights
 */

class TravelResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'number_of_days' => $this->number_of_days,
            'number_of_nights' => $this->number_of_nights,
        ];
    }
}
