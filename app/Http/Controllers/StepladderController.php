<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stepladder;
use App\Models\Step;

class StepladderController extends Controller
{
	public function stepOnStepladder(Stepladder $stepladder, Step $step)
	{
		return response()->json(compact('stepladder', 'step'));
	}
}
