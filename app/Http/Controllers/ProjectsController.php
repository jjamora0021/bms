<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Projects;
use App\Models\BOQ;

class ProjectsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->Projects = new \App\Models\Projects;
        $this->BOQ = new \App\Models\BOQ;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $card_header = 'List of Projects';
        $boq = $this->BOQ->fetchAllMaterials();
        $projects = $this->Projects->fetchAllProjects();

        return view('pages.projects.projects', compact('card_header','boq','projects'));
    }
}
