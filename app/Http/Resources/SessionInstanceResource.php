<?php

namespace App\Http\Resources;

class SessionInstanceResource extends AbstractResource
{
    public function toArray($request) {
        return array_merge($this->getAuditing(), [
            'session_id' => $this->session_id,
            'exerciseInstances' => ExerciseInstanceResource::collection($this->exerciseInstances)
        ]);
    }

}
