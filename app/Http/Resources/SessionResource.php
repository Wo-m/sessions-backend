<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SessionResource extends AbstractResource
{
    /**
     * @param $request
     * @return array representation of User
     */
    public function toArray($request) {
        return array_merge($this->getAuditing(), [
            'name' => $this->name,
            'instances' => SessionInstanceResource::collection($this->instances)
        ]);
    }

}
