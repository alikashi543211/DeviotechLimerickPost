<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MessageType;


class MessageTypeController extends Controller
{
	public function list()
	{
		$message_types = MessageType::all();
		return view('admin.msg_type.list', get_defined_vars());
	}
	public function add()
	{
		return view('admin.msg_type.add');
	}

	public function store(Request $request)
	{
		$request->validate([
			'msg_type' => 'required',
		]);
		MessageType::create([
			'msg_type' => $request->msg_type,
		]);
		return redirect()->route('admin.msg_type.list')->with('success', 'The Message Type is Created Successfully');
	}

	public function edit($id)
	{
		$message_type = MessageType::find($id);
		return view('admin.msg_type.edit', get_defined_vars());
	}

	public function update(Request $request, $id)
	{
		$request->validate([
			'msg_type' => 'required',
		]);
		$message_types = MessageType::find($id);
		$message_types->msg_type = $request->msg_type;
		$message_types->update();
		return redirect()->route('admin.msg_type.list')->with('success', 'The Message Type is updated successfull');
	}
	public function delete($id)
	{
		$message_types = MessageType::find($id);
		$message_types->delete();
		return redirect()->route('admin.msg_type.list')->with('success', 'The Message Type is deleted successfully');
	}
}
