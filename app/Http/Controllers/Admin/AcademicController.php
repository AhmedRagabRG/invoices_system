<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Academic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcademicController extends Controller
{
    public function index() {
        $user = Auth::user();
        $academics = Academic::all();

        return view('pages.academic', [
            'user' => $user,
            'academics' => $academics
        ]);
    }

    public function create() {
        $user = Auth::user();

        return view('pages.academic-create', [
            'user' => $user,
        ]);
    }

    public function store() {
        $user = Auth::user();

        return view('pages.academic-create', [
            'user' => $user,
        ]);
    }


}
