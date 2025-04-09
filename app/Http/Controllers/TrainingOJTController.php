<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingOJTController extends Controller
{
    public function index() {
        return view('content.admin.trainingojt');
    }
}
