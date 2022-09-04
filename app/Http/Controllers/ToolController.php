<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;
use App\Strings\ToolStatus;

class ToolController extends Controller
{
	public function index(Tool $tool)
	{
	    return $tool;
	}

	public function changeStatus(Tool $tool, ToolStatus $status)
	{
		$tool->status = $status;
		$tool->save();
		return redirect()->route('tool', $tool->id);
	}
}
