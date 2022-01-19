<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AniversaryNo;

class AniversaryNoController extends Controller
{
	public function list()
	{
		$aniversaries = AniversaryNo::all();
		return view('admin.aniversary_no.list', get_defined_vars());
	}
	public function add()
	{
		return view('admin.aniversary_no.add');
	}

	public function store(Request $request)
	{
		$request->validate([
			'aniversary_no' => 'required',
		]);
		AniversaryNo::create([
			'aniversary_no' => $request->aniversary_no,
		]);
		return redirect()->route('admin.aniversary.list')->with('success', 'The Aniversary No is Created Successfully');
	}

	public function edit($id)
	{
		$aniversary = AniversaryNo::find($id);
		return view('admin.aniversary_no.edit', get_defined_vars());
	}

	public function update(Request $request, $id)
	{
		$request->validate([
			'aniversary_no' => 'required',
		]);
		$aniversary = AniversaryNo::find($id);
		$aniversary->aniversary_no = $request->aniversary_no;
		$aniversary->update();
		return redirect()->route('admin.aniversary.list')->with('success', 'The Aniversary No is updated successfull');
	}
	public function delete($id)
	{
		$aniversary = AniversaryNo::find($id);
		$aniversary->delete();
		return redirect()->route('admin.aniversary.list')->with('success', 'The Aniversary No is deleted successfully');
	}
}