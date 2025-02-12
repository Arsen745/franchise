<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedBackRequest;
use App\Models\FeedBack;
use Illuminate\Http\RedirectResponse;

class FeedBackController extends Controller
{
    /**
     * @param StoreFeedBackRequest $request
     * @return RedirectResponse
     */
    public function store(StoreFeedBackRequest $request): RedirectResponse
    {
        $data = $request->validated();

        FeedBack::create($data);

        return back()->with('success', 'Спасибо за вашу заявку! Мы скоро с вами свяжемся.');
    }
}
