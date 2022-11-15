<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AbstractResource extends JsonResource
{
    /**
     * @return array base auditing fields
     */
    public function getAuditing() {
        return [
            'id' => $this->id
//            'inserted_by' => $this->inserted_by,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at];
        ];
    }
}
