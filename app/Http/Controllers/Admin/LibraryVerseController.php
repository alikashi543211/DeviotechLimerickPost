<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LibraryVerse;


class LibraryVerseController extends Controller
{
	public function list()
	{
		$library_verses = LibraryVerse::all();
		return view('admin.verse.list', get_defined_vars());
	}
	public function add()
	{
		return view('admin.verse.add');
	}

	public function store(Request $request)
	{
		$request->validate([
			'number' => 'required',
			'words' => 'required',
			'price' => 'required'
		]);
		LibraryVerse::create([
			'number' => $request->number,
			'words' => $request->words,
			'price' => $request->price,
		]);
		return redirect()->route('admin.library_Verse.list')->with('success', 'The Library Verse is Created Successfully');
	}

	public function edit($id)
	{
		$library_verse = LibraryVerse::find($id);
		return view('admin.verse.edit', get_defined_vars());
	}

	public function update(Request $request, $id)
	{
		$request->validate([
			'number' => 'required',
			'words' => 'required',
			'price' => 'required'
		]);
		$library_verse = LibraryVerse::find($id);
		$library_verse->number = $request->number;
		$library_verse->words = $request->words;
		$library_verse->price = $request->price;

		$library_verse->update();
		return redirect()->route('admin.library_Verse.list')->with('success', 'The Library Verse is updated successfull');
	}
	public function delete($id)
	{
		$library_verse = LibraryVerse::find($id);
		$library_verse->delete();
		return redirect()->route('admin.library_Verse.list')->with('success', 'The Library Verse is deleted successfully');
	}
}
