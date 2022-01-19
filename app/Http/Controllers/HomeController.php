<?php

namespace App\Http\Controllers;

use App\Models\AniversaryNo;
use App\Models\Chruch;
use App\Models\DiscountRate;
use App\Models\DiscountType;
use App\Models\LibraryVerse;
use App\Models\MessageType;
use App\Models\PaymentMethod;
use App\Models\TakenBy;
use App\Models\Mems;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Dcblogdev\Dropbox\Facades\Dropbox;
use DB;
use Carbon\Carbon;
use App\Models\Setting;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        if (empty($request->name)) {
            abort(401);
        }
        
        $discountTypes  = DiscountType::all()->toArray();
        $discountRates  = DiscountRate::all()->toArray();
        $libraryVerses  = LibraryVerse::all()->toArray();
        $mems = Mems::all();

        return view('front.home', get_defined_vars());
    }

    public function loadHeaderForm(Request $req)
    {
        return view("ajax.front.form.header_form", get_defined_vars());
    }

    public function loadAcknowldgementForm(Request $req)
    {
        $chruches = Chruch::all();
        $payment_payments = PaymentMethod::all();
        $taken_byes = TakenBy::all();

        return view("ajax.front.form.acknowledgement_form", get_defined_vars());
    }

    public function loadInMemsForm(Request $req)
    {
        $chruches = Chruch::all();
        $mems = Mems::all();
        $message_types = MessageType::all();
        $payment_payments = PaymentMethod::all();
        $taken_byes = TakenBy::all();

        return view("ajax.front.form.in_mems_form", get_defined_vars());
    }

    function loadInMemsNewForm(Request $req)
    {
        $chruches = Chruch::all();
        $mems = Mems::all();
        $message_types = MessageType::all();
        $payment_payments = PaymentMethod::all();
        $taken_byes = TakenBy::all();

        return view("ajax.front.form.in_mems_new_form", get_defined_vars());
    }

    function loadInMemsExistingForm(Request $req)
    {
        $chruches = Chruch::all();
        $mems = Mems::all();
        $message_types = MessageType::all();
        $payment_payments = PaymentMethod::all();
        $taken_byes = TakenBy::all();

        return view("ajax.front.form.in_mems_existing_form", get_defined_vars());
    }

    function loadInMemsExistingDataForm(Request $req)
    {
        $mem_verse = false;
        $mem_verse_data = [];
        $images_data = [];
        $is_one_inches = false;
        $is_two_inches = false;

        $chruches = Chruch::all();
        $mems = Mems::all();
        $message_types = MessageType::all();
        $payment_payments = PaymentMethod::all();
        $taken_byes = TakenBy::all();
        $visitor = Mems::where('first_name', $req->name)->first();
        $visitor_data = $visitor->toArray();

        if(count($visitor->mem_verses) > 0)
        {
            $mem_verse_data = $visitor->mem_verses->toArray();
            $mem_verse = true;
        }

        if(count($visitor->images) > 0)
        {
            $images_data = $visitor->images;
        }

        return response()->json([
            'html' => view("ajax.front.form.in_mems_existing_data_form", get_defined_vars())->render(),
            'mem_verse' => $mem_verse,
            'mem_verse_data' => $mem_verse_data,
            'visitor_data' => $visitor_data,
            'images_data' => $images_data,
        ]);
    }

    function loadLibraryVerseCoast(Request $req)
    {
        $lib = LibraryVerse::find($req->id);
        return response()->json($lib);
    }

}
