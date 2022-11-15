<?php

namespace App\Http\Resources;

class EffortsResource extends AbstractResource
{

    public function toArray($request) {
        return array_merge($this->getAuditing(), [
            'set' => $this->set,
            'reps' => $this->reps,
            'weight' => $this->weight
        ]);
    }
}
