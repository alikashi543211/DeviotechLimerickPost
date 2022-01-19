<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Acknowledge;
use App\Models\Mems;
use App\Models\Verse;
use App\Models\Image;
use Carbon\Carbon;
use App\Models\Visitor;
use App\Models\Keyby;
use Session;

class ReportingController extends Controller
{
	public function acknowledge(Request $request)
	{
		$acknowledges = new Acknowledge;
		$visitors = Visitor::all();
		// dd($acknowledges);
		if (isset($request->from) && isset($request->to)) {
			$from =  Carbon::createFromFormat('m/d/Y', $request->from)->format('Y-m-d H:i:s');
			$to =  Carbon::createFromFormat('m/d/Y', $request->to)->format('Y-m-d H:i:s');
			$acknowledges = $acknowledges->whereBetween('created_at', array($from, $to));
		} else if (isset($request->from) && !isset($request->to)) {
			$from =  Carbon::createFromFormat('m/d/Y', $request->from)->format('Y-m-d H:i:s');
			$acknowledges = $acknowledges->where('created_at', '>', $from);
		} else if (!isset($request->from) && isset($request->to)) {
			$to =  Carbon::createFromFormat('m/d/Y', $request->to)->format('Y-m-d H:i:s');
			$acknowledges = $acknowledges->where('created_at', '<', $to);
		}
		$acknowledges = $acknowledges->orderBy('created_at', 'desc')->get();
		// dd($acknowledges);
		return view('admin.reporting.acknowledge',get_defined_vars());
	}

	public function get_ack_detail($id)
	{
		$visitor = Acknowledge::findOrFail($id);
		// dd($visitor->message);
		return view('admin.reporting.ack_detail', get_defined_vars());	
	}

	public function mems(Request $request)
	{
		$mems = new Mems;
		$visitors = Visitor::all();

		if (isset($request->from) && isset($request->to)) {
			$from =  Carbon::createFromFormat('m/d/Y', $request->from)->format('Y-m-d H:i:s');
			$to =  Carbon::createFromFormat('m/d/Y', $request->to)->format('Y-m-d H:i:s');
			$mems = $mems->whereBetween('created_at', array($from, $to));
		} else if (isset($request->from) && !isset($request->to)) {
			$from =  Carbon::createFromFormat('m/d/Y', $request->from)->format('Y-m-d H:i:s');
			$mems = $mems->where('created_at', '>', $from);
		} else if (!isset($request->from) && isset($request->to)) {
			$to =  Carbon::createFromFormat('m/d/Y', $request->to)->format('Y-m-d H:i:s');
			$mems = $mems->where('created_at', '<', $to);
		}
		$mems = $mems->orderBy('created_at', 'desc')->get();

		return view('admin.reporting.mems',get_defined_vars());
	}

	public function get_mems_detail($id)
	{
		$visitor = Mems::findOrFail($id);
		return view('admin.reporting.mems_detail', get_defined_vars());
	}

	public function memsVerses($id)
	{
		$visitor = Mems::findOrFail($id);
		return view('admin.reporting.mems_detail', get_defined_vars());
	}

	public function updateAcknowledge(Request $req)
	{
		$ack = Acknowledge::where('id', $req->id)
			->update($req->except('_token'));
		return back()->with("success", "Acknowledge Updated Successfully !");
	}

	public function updateMems(Request $req)
	{
		$ack = Mems::where('id', $req->id)
			->update($req->except('_token'));
		return back()->with("success", "Mems Updated Successfully !");
	}

	public function loadAcknowledgeForm(Request $req)
	{
		$keyed_list = Keyby::select('name')->distinct()->get();
		$ack_data = Acknowledge::find($req->id);
		return view("ajax.admin.acknowledge_edit", get_defined_vars());
	}

	public function loadMemsForm(Request $req)
	{
		$keyed_list = Keyby::select('name')->distinct()->get();
		$mems_data = Mems::find($req->id);
		return view("ajax.admin.mems_edit", get_defined_vars());
	}

	public function mems_status($id)
	{
		$mem = Mems::findOrFail($id);
		if($mem->is_active == '0')
		{
			$mem->is_active = '1';
		}else{
			$mem->is_active = '0';
		}
		$mem->save();
		
		return redirect()->route('admin.reporting.mems')->with('success', 'Status Changed Successfully');
	}
	
}
