<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\BOQ;

class BOQController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->User = new \App\Models\User;
        $this->BOQ = new \App\Models\BOQ;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boq = $this->BOQ->fetchAllMaterials();
        $card_header = 'List Of Materials';

        return view('pages.boq.boq', compact('boq','card_header'));
    }
}
