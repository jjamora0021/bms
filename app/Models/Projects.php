<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Projects extends Model
{
    use HasFactory;

    public function fetchAllProjects()
    {
        $data = (DB::table('projects')->get())->toArray();

    	return $data;
    }
}
