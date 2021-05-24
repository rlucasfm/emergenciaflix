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

        $data['courses'] = Course::get_avaliable(Auth::id());

        return view('principal', $data);
    }
}
