<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keyby;

class KeyByController extends Controller
{
    public function list()
	{
		$list = Keyby::all();
		return view('admin.key_by.list', get_defined_vars());
	}

	public function add()
	{
		return view('admin.key_by.add');
	}

	public function edit($id)
	{
		$item = Keyby::findOrFail($id);
		return view("admin.key_by.edit", get_defined_vars());
	}

	public function save(Request $req)
	{
		if(isset($req->id))
		{
			Keyby::where("id", $req->id)
				->update($req->except("_token"));
		}else
		{
			Keyby::create($req->except("_token"));
		}
		return redirect()->route("admin.by_key.list")->with("success", "Saved Successfully !");
	}

	public function delete($id)
	{
		$item = Keyby::findOrFail($id);
		$item->delete();
		return back()->with('success', 'Deleted Successfully !');
	}
}
