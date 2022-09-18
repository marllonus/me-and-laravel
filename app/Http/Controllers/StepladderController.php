<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stepladder;
use App\Models\Step;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Rules\ExistStepladderMaterial;
use App\Rules\ExistStepladderColor;

class StepladderController extends Controller
{
	public function stepOnStepladder(Stepladder $stepladder, Step $step)
	{
		return response()->json(compact('stepladder', 'step'));
	}

	public function index(Request $request)
	{
		$validator = Validator::make($request->all(),[
			'material.*.type' => Rule::forEach(function($value,$attribute){
				//var_dump($value);
				return [
					new ExistStepladderColor($value)
				];
			}),
			'color.*.type' => new ExistStepladderMaterial,
		]);
		$validator->validate();
	}
}
