<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function addTestimonial(Request $request) {

        $testtimonial = Testimonial::create($request->testimonial);


        return response()->json(['success' => 'Отзыв успешно добавлен!']);
    }
}
