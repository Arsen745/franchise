<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedBackRequest;
use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    public function store(StoreFeedBackRequest $request)
    {
        $data = $request->validated();

        FeedBack::create($data);

        return redirect()->with('success', 'Спасибо за вашу заявку! Мы скоро с вами свяжемся.');
    }
}
