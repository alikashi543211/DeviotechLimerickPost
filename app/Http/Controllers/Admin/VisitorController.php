<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;


class VisitorController extends Controller
{
	public function list()
	{
		$visitors = Visitor::all();
		return view('admin.visitor.list', get_defined_vars());
	}
	public function add()
	{
		return view('admin.visitor.add');
	}

	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required|unique:visitors',
		]);
		$visitor =  Visitor::create([
			'name' => $request->name,
			'url' => route('index') . "?name=$request->name",
		]);
		return redirect()->route('admin.visitor_link.list')->with('success', 'The Staff Link Created Successfully');
	}

	public function edit($id)
	{
		$visitor = Visitor::find($id);
		return view('admin.visitor.edit', get_defined_vars());
	}

	public function update(Request $request, $id)
	{
		$request->validate([
			'name' => 'required',
		]);

		$visitor = Visitor::find($id);
		if($visitor->name !== $request->name)
		{
			$visitor->name = $request->name;
			$visitor->url = route('index') . "?name=$request->name";
		}
		$visitor->update();
		return redirect()->route('admin.visitor_link.list')->with('success', 'The Staff Link is updated successfull');
	}
	public function delete($id)
	{
		$visitor = Visitor::find($id);
		$visitor->delete();
		return redirect()->route('admin.visitor_link.list')->with('success', 'The Staff Link is deleted successfully');
	}
}
