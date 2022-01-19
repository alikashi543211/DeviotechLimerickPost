<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acknowledge;
use App\Models\Mems;
use App\Models\Verse;
use App\Models\ProvidedVerse;
use App\Models\Image;
use Carbon\Carbon;
use App\Models\DiscountRate;
use App\Models\DiscountType;
use App\Models\LibraryVerse;

use App\Models\AniversaryNo;
use App\Models\Chruch;
use App\Models\MessageType;
use App\Models\PaymentMethod;
use App\Models\TakenBy;
use App\Models\MemVerse;
use App\Models\Visitor;
use Dcblogdev\Dropbox\Facades\Dropbox;
use App\Models\Setting;

use App\Rules\MassDetailRule;
use Config;


class FormController extends Controller
{
	public function __construct()
	{
		$setting = Setting::pluck('setting', 'name');
		Config::set('dropbox.accessToken', $setting['dropbox_access_token']);
	}

	public function store(Request $req)
	{
		// dd($req->counter_taken, $req->Receipt_number, $req->all(), $req->counter_taken_new);
		$ack = "";
		$mems = "";

		$auto_Date = Carbon::parse($req->auto_Date)->format('Y-m-d');

		// Save Acknowledgment
		if ($req->type_1 == "Acknowledgement") 
		{

			$Insertion_Date_Ack = Carbon::parse($req->Insertion_Date_Ack)->format('Y-m-d');
			if(isset($req->mass_detail_ack))
			{
				$mass_detail_ack = true;
			}else{
				$mass_detail_ack = false;
			}
			// Save Acknowledgment Info
			$ack = Acknowledge::create([
				'auto_Date' => $auto_Date,
				'admin_name' => $req->admin_name,
				'type_1' => $req->type_1,
				'Insertion_Date_Ack' => $Insertion_Date_Ack,
				'deceased_name' => $req->deceased_name,
				'address' => $req->address,
				'contactName' => $req->contactName,
				'telNumber' => $req->telNumber,
				'emailAddress' => $req->emailAddress,
				'date_time_ack' => $mass_detail_ack,
				'date_time_ack' => $req->date_time_ack,
				'message' => $req->message,
				'wordCount' => $req->wordCount,
				'wordCost' => $req->wordCost,
				'add_img_ack' => $req->add_img_ack,
				'size_ack' => $req->size_ack,
				'total_number_1_ack' => $req->total_number_1_ack,
				'images_cost_1_ack' => $req->images_cost_1_ack,
				'total_number_2_ack' => $req->total_number_2_ack,
				'images_cost_2_ack' => $req->images_cost_2_ack,
				'spcl_ins_permit_ack' => $req->spcl_ins_permit_ack,
				'spcl_ins_free_ack' => $req->spcl_ins_free_ack,
				'wordsCost' => $req->wordsCost,
				'picCost' => $req->picCost,
				'Total_amount_1_ack' => $req->Total_amount_1_ack,
				'discount_ack' => $req->discount_ack,
				'discount_type' => $req->discount_type,
				'discount_rate' => $req->discount_rate,
				'discount_amount' => $req->discount_amount,
				'final_cost_ack' => $req->final_cost_ack,
				'chruch_ack' => $req->chruch_ack,
				'ack_payment_method' => $req->ack_payment_method,
				'ack_receipt_number' => $req->ack_receipt_number,
				'ack_booking_number' => $req->ack_booking_number,
				'ack_counter_taken' => $req->ack_counter_taken,
				'ack_machine_no' => $req->ack_machine_no,
				'ack_CC_receipt_number' => $req->ack_CC_receipt_number,
				'ack_m_c_no' => $req->ack_m_c_no,
				'ack_comment' => $req->ack_comment,
			]);

			// Dropbox folder
			// $now = Carbon::now();
			// $parent = "/Ack " . $now->format('Y');
			// $master = "/Ack Week " . $now->startOfWeek()->format('d M Y');
			// $folder = "/Ack " . $request->deceased_name;

			// if (!Dropbox::files()->listContents($parent)['exist']) {
			// 	Dropbox::files()->createFolder($parent);
			// }
			// if (!Dropbox::files()->listContents($parent . $master)['exist']) {
			// 	Dropbox::files()->createFolder($parent . $master);
			// }
			// if (!Dropbox::files()->listContents($parent . $master . $folder)['exist']) {
			// 	Dropbox::files()->createFolder($parent . $master . $folder);
			// }

			if ($req->add_img_ack == "Yes") {

				// 1 inch Images
				if ($req->size_ack == "1") {
					for ($i = 0; $i < count($req->img_type_1_ack); $i++) {
						$img = new Image();
						$img->acknowledge_id = $ack->id;
						$img->img_type_1_ack = $req->img_type_1_ack[$i];
						$img->img_cost_1_ack = $req->img_cost_1_ack[$i];
						$img->save();
					}
				}

				// 2 inch Images
				if ($req->size_ack == "2") {
					for ($i = 0; $i < count($req->img_type_2_ack); $i++) {
						$img = new Image();
						$img->acknowledge_id = $ack->id;
						$img->img_type_2_ack = $req->img_type_2_ack[$i];
						$img->img_cost_2_ack = $req->img_cost_2_ack[$i];
						$img->save();
					}
				}
			}
		}

		if ($req->type_1 == "In mems") 
		{
			$pick_issue_date = Carbon::parse($req->pick_issue_date)->format('Y-m-d');
			$mem_data = [
					'auto_Date' => $auto_Date,
					'admin_name' => $req->admin_name,
					'type_1' => $req->type_1,
					'insertion_Date_Mems' => $pick_issue_date,
					'first_name' => $req->first_name,
					'surname' => $req->surname,
					'aniversary_number' => $req->aniversary_number,
					'aniversary_date' => $req->aniversary_date,
					'deceased_add1' => $req->deceased_add1,
					'deceased_add2' => $req->deceased_add2,
					'opening' => $req->opening,
					'New_Ref_no' => $req->New_Ref_no,
					'Opening_cost' => $req->Opening_cost,
					'contact_name' => $req->contact_name,
					'Tel_no' => $req->Tel_no,
					'Email_address' => $req->Email_address,
					'pick_issue_date' => $pick_issue_date,
					'date_time_mems' => $req->date_time_mems,
					'chruch_mems' => $req->chruch_mems,
					'verse_contact_name' => $req->verse_contact_name,
					'verse_tel_no' => $req->verse_tel_no,
					'verse_email_address' => $req->verse_email_address,
					'pro_lib' => $req->pro_lib,
					'add_img' => $req->add_img,
					'two_inches' => $req->two_inches,
					'total_number_2' => $req->total_number_2,
					'total_cost_2' => $req->total_cost_2,
					'one_inches' => $req->one_inches,
					'total_number_1' => $req->total_number_1,
					'total_cost_1' => $req->total_cost_1,
					'verses_permit' => $req->verses_permit,
					'spcl_ins_permit_mems' => $req->spcl_ins_permit_mems,
					'spcl_ins_free_mems' => $req->spcl_ins_free_mems,
					'total_words' => $req->total_words,
					'Pictures_total' => $req->Pictures_total,
					'verse_total' => $req->verse_total,
					'Total_amount_1_mems' => $req->Total_amount_1_mems,
					'discount_mems' => $req->discount_mems,
					'mems_discount_type' => $req->mems_discount_type,
					'mems_discount_rate' => $req->mems_discount_rate,
					'mems_discount_amount' => $req->mems_discount_amount,
					'final_cost_mems' => $req->final_cost_mems,
					'payment_method' => $req->payment_method,
					'Receipt_number' => $req->Receipt_number,
					'Booking_number' => $req->Booking_number,
					'counter_taken' => $req->counter_taken,
					'machine_no' => $req->machine_no,
					'CC_Receipt_number' => $req->CC_Receipt_number,
					'm_c_no' => $req->m_c_no,
					'comment' => $req->comment
				];
			if(isset($req->id))
			{
				// Existing Mem Data
				$mems = Mems::find($req->id);

				$mems->mem_verses()->delete();
				$mems->mems_images()->delete();
				
				$memes_updated = Mems::where('id', $req->id)
					->update($mem_data);
			}else
			{
				$mems = Mems::create($mem_data);
			}
			

			// Dropbox folder
			// $now = Carbon::now();
			// $parent = "/Mem " . $now->format('Y');
			// $master = "/Mem Week " . $now->startOfWeek()->format('d M Y');
			// $folder = "/Mem " . $request->first_name . " " . $request->surname;

			// if (!Dropbox::files()->listContents($parent)['exist']) {
			// 	Dropbox::files()->createFolder($parent);
			// }
			// if (!Dropbox::files()->listContents($parent . $master)['exist']) {
			// 	Dropbox::files()->createFolder($parent . $master);
			// }
			// if (!Dropbox::files()->listContents($parent . $master . $folder)['exist']) {
			// 	Dropbox::files()->createFolder($parent . $master . $folder);
			// }
			
			foreach ($req->mem_verse_type as $index=>$mem_verse_item) {
				$verse = new MemVerse();
				$verse->meme_id = $mems->id;
				$verse->mem_verse_type = $req->mem_verse_type[$index];
				$verse->mem_verse_library_no = $req->mem_verse_library_no[$index] ?? null;
				$verse->mem_verse_no_of_words = $req->mem_verse_no_of_words[$index];
				$verse->mem_verse_price = $req->mem_verse_price[$index];
				$verse->mem_verse_person_leaving_comment = $req->mem_verse_person_leaving_comment[$index];
				$verse->mem_verse_message = $req->mem_verse_message[$index];
				$verse->save();
			}
			if ($req->add_img == "Yes") {
				if ($req->two_inches == "Yes") {
					for ($i = 0; $i < count($req->img_type_1); $i++) {
						$img = new Image();
						$img->meme_id = $mems->id;
						$img->img_type_1 = $req->img_type_1[$i];
						$img->img_cost_1 = $req->img_cost_1[$i];
						$img->save();
					}
				}

				if ($req->one_inches == "Yes") {
					for ($i = 0; $i < count($req->img_type_2); $i++) {
						$img = new Image();
						$img->meme_id = $mems->id;
						$img->img_type_2 = $req->img_type_2[$i];
						$img->img_cost_2inch = $req->img_cost_2inch[$i];
						$img->save();
					}
				}
			}
		}


		return redirect()->route('form.thanku');
	}


	public function thanku()
	{
		return view('front.thanku');
	}

	public function get_existing_mems(Request $request)
	{
		$discountTypes  = DiscountType::all()->toArray();
        $discountRates  = DiscountRate::all()->toArray();
        $libraryVerses  = LibraryVerse::all()->toArray();

        $aniversaries     = AniversaryNo::all();
        $chruches         = Chruch::all();
        $message_types    = MessageType::all();
        $payment_payments = PaymentMethod::all();
        $taken_byes       = TakenBy::all();
        $visitors         = Visitor::all();
        $mems = Mems::all();

		$visitor = Mems::where('first_name', $request->name)->first();
		if ($visitor) {
			return view('front.exising_mems', get_defined_vars());
		} else {
		}
	}
}
