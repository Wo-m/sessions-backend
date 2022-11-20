<?php

namespace App\Actions;

use App\Http\Resources\ExerciseInstanceResource;
use App\Models\ExerciseInstance;
use Lorisleiva\Actions\Concerns\AsAction;

class GetExerciseData
{
    use AsAction;

    public function handle($exercise_id)
    {
        $data = ExerciseInstance::where('exercise_id', $exercise_id)->get();

        // TODO formulate this so all front end has to do is plot data
        //  create model that contains exercises with respective
        //  - estimated one rep maxes
        //  - max weight
        //  - max reps
        //  over time (exerciseInstances, and above is for efforts in each instance)
        return ExerciseInstanceResource::collection($data);
    }

}
