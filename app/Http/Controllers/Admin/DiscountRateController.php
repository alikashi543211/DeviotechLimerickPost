<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DiscountRate;
use App\Models\DiscountType;


class DiscountRateController extends Controller
{
	public function list()
	{
		$discountRates = DiscountRate::all();
		return view('admin.discountRate.list', get_defined_vars());
	}
	public function add()
	{
		$discountTypes = DiscountType::all();
		return view('admin.discountRate.add', get_defined_vars());
	}

	public function store(Request $request)
	{
		$request->validate([
			'rate' => 'required',
			'discount_types_id' => 'required',
		]);
		DiscountRate::create([
			'rate' => $request->rate,
			'discount_types_id' => $request->discount_types_id,
		]);
		return redirect()->route('admin.discounRate.list')->with('success', 'The Discount Rate is Created Successfully');
	}

	public function edit($id)
	{
		$discountTypes = DiscountType::all();
		$discountRates = DiscountRate::find($id);
		return view('admin.discountRate.edit', get_defined_vars());
	}

	public function update(Request $request, $id)
	{
		$request->validate([
			'rate' => 'required',
			'discount_types_id' => 'required',
		]);
		$discounRate = DiscountRate::find($id);
		$discounRate->rate = $request->rate;
		$discounRate->discount_types_id = $request->discount_types_id;
		$discounRate->update();
		return redirect()->route('admin.discounRate.list')->with('success', 'The Discount Rate is updated successfull');
	}
	public function delete($id)
	{
		$discounRate = DiscountRate::find($id);
		$discounRate->delete();
		return redirect()->route('admin.discounRate.list')->with('success', 'The Discount Rate is deleted successfully');
	}
}
