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

	public function activate(Tool $tool)
	{
		$tool->status = ToolStatus::Active;
		$tool->save();
		return redirect()->route('tool', $tool->id);
	}

	public function deactivate(Tool $tool)
	{
		$tool->status = ToolStatus::Inactive;
		$tool->save();
		return redirect()->route('tool', $tool->id);
	}
}
