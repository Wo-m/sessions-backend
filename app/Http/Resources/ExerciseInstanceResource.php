<?php

namespace App\Http\Resources;

class ExerciseInstanceResource extends AbstractResource
{

    public function toArray($request) {
        return array_merge($this->getAuditing(), [
            'name' => $this->exercise->name,
            'efforts' => EffortsResource::collection($this->efforts)
        ]);
    }

}
