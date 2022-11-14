<?php

namespace App\Actions;

use App\Models\Exercise;
use Lorisleiva\Actions\Concerns\AsAction;

class SaveExercise
{
    use AsAction;

    public function handle(string $exerciseName) {
        $exercise = new Exercise(["name"=>$exerciseName]);
        $exercise->save();
    }
}
