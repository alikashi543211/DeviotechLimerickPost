<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chruch;

class ChruchController extends Controller
{
	public function list()
	{
		$chruchs = Chruch::all();
		return view('admin.chruch.list', get_defined_vars());
	}
	public function add()
	{
		return view('admin.chruch.add');
	}

	public function store(Request $request)
	{
		$request->validate([
			'chruch' => 'required',
		]);
		Chruch::create([
			'chruch' => $request->chruch,
		]);
		return redirect()->route('admin.chruch.list')->with('success', 'The Chruch is Created Successfully');
	}

	public function edit($id)
	{
		$chruch = Chruch::find($id);
		return view('admin.chruch.edit', get_defined_vars());
	}

	public function update(Request $request, $id)
	{
		$request->validate([
			'chruch' => 'required',
		]);
		$chruchs = Chruch::find($id);
		$chruchs->chruch = $request->chruch;
		$chruchs->update();
		return redirect()->route('admin.chruch.list')->with('success', 'The Chruch is updated successfull');
	}
	public function delete($id)
	{
		$chruchs = Chruch::find($id);
		$chruchs->delete();
		return redirect()->route('admin.chruch.list')->with('success', 'The Chruch is deleted successfully');
	}
}
