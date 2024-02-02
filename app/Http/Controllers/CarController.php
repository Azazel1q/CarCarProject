<?php

namespace App\Http\Controllers;

use App\Models\Marka;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {

    }

    public function adminindex() {
        return view('/admin/index', [
            'marka'=>Marka::all(),
        ]);
    }
}
