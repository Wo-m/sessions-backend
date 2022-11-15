<?php

namespace App\Http\Resources;

class ExerciseResource extends AbstractResource
{
    // TODO
    // conditionally return exercise instances and auditing, i.e when
    // using this resource from instances, we just want the name

    public function toArray($request) {
        return array_merge($this->getAuditing(), [
            'name' => $this->name
        ]);
    }
}
