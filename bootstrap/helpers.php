<?php

use App\Models\LibraryVerse;
use App\Models\Setting;

function get_library_verses()
{
	return LibraryVerse::select('id', 'number')->get();
}

function setting()
{
	return Setting::pluck('setting','name')->toArray();
}

function get_days()
{
	return ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
}