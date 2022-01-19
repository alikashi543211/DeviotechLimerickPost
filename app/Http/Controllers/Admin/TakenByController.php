<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TakenBy;


class TakenByController extends Controller
{
	public function list()
	{
		$taken_bies = TakenBy::all();
		return view('admin.taken_by.list', get_defined_vars());
	}
	public function add()
	{
		return view('admin.taken_by.add');
	}

	public function store(Request $request)
	{
		$request->validate([
			'taken_by' => 'required',
		]);
		TakenBy::create([
			'taken_by' => $request->taken_by,
		]);
		return redirect()->route('admin.taken_by.list')->with('success', 'The Taken By Created Successfully');
	}

	public function edit($id)
	{
		$taken_by = TakenBy::find($id);
		return view('admin.taken_by.edit', get_defined_vars());
	}

	public function update(Request $request, $id)
	{
		$request->validate([
			'taken_by' => 'required',
		]);
		$taken_by = TakenBy::find($id);
		$taken_by->taken_by = $request->taken_by;
		$taken_by->update();
		return redirect()->route('admin.taken_by.list')->with('success', 'The Taken By is updated successfull');
	}
	public function delete($id)
	{
		$taken_by = TakenBy::find($id);
		$taken_by->delete();
		return redirect()->route('admin.taken_by.list')->with('success', 'The Taken By is deleted successfully');
	}
}
