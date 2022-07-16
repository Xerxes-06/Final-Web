<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Biodata;

class HomeController extends Controller
{
    public function index()
    {
        $biodatas = Biodata::all();
        return view('member.home', ['biodatas' => $biodatas]);
    }

    public function show($id)
    {
        $biodata = Biodata::find($id);

        return view('member.biodata-show', ['biodata' => $biodata]);
    }
}
