<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseCatalogController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = [];

        $user_id = Auth::id();
        $courses_aval = Course::get_available($user_id);

        $data['courses'] = $courses_aval;

        return view('principal', $data);
    }
}
