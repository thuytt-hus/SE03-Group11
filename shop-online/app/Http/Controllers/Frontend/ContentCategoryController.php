<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentCategoryController extends Controller
{
    //


    public function detail() {

        return view('frontend.content.category.detail');
    }
}
