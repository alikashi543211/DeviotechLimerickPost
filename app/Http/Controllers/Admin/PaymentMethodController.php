<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;


class PaymentMethodController extends Controller
{
	public function list()
	{
		$payment_methods = PaymentMethod::all();
		return view('admin.payment_method.list', get_defined_vars());
	}
	public function add()
	{
		return view('admin.payment_method.add');
	}

	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required',
		]);
		PaymentMethod::create([
			'name' => $request->name,
		]);
		return redirect()->route('admin.payment_method.list')->with('success', 'The Payment Method is Created Successfully');
	}

	public function edit($id)
	{
		$payment_method = PaymentMethod::find($id);
		return view('admin.payment_method.edit', get_defined_vars());
	}

	public function update(Request $request, $id)
	{
		$request->validate([
			'name' => 'required',
		]);
		$payment_method = PaymentMethod::find($id);
		$payment_method->name = $request->name;
		$payment_method->update();
		return redirect()->route('admin.payment_method.list')->with('success', 'The Payment Method is updated successfull');
	}
	public function delete($id)
	{
		$payment_method = PaymentMethod::find($id);
		$payment_method->delete();
		return redirect()->route('admin.payment_method.list')->with('success', 'The Payment Method is deleted successfully');
	}
}
