<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DiscountType;

class DiscountTypeController extends Controller
{
	public function list()
	{
		$discountTypes = DiscountType::all();
		return view('admin.discountType.list', get_defined_vars());
	}
	public function add()
	{
		return view('admin.discountType.add');
	}

	public function store(Request $request)
	{
		$request->validate([
			'type' => 'required',
		]);
		DiscountType::create([
			'type' => $request->type,
		]);
		return redirect()->route('admin.discounType.list')->with('success', 'The Discount Type is Created Successfully');
	}

	public function edit($id)
	{
		$discounType = DiscountType::find($id);
		return view('admin.discountType.edit', get_defined_vars());
	}

	public function update(Request $request, $id)
	{
		$request->validate([
			'type' => 'required',
		]);
		$discounType = DiscountType::find($id);
		$discounType->type = $request->type;
		$discounType->update();
		return redirect()->route('admin.discounType.list')->with('success', 'The Discount Type is updated successfull');
	}
	public function delete($id)
	{
		$discounType = DiscountType::find($id);
		$discounType->delete();
		return redirect()->route('admin.discounType.list')->with('success', 'The Discount Type is deleted successfully');
	}
}
