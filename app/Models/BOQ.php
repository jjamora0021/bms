<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;
use Carbon\Carbon;

class BOQ extends Model
{
    use HasFactory;

    /**
     * Get All Materials on BOQ Table
     */
    public function fetchAllMaterials()
    {
        $data = (DB::table('boq')->get())->toArray();

    	return $data;
    }
}
