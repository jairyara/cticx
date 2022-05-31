<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function create(): Factory|View|Application
    {
        $title = "Retos";
        $user = "Jair Yara";

        return view('platform.challenges', compact("title", "user"));
    }

    public function store(Request $request): Factory|View|Application
    {
        $challenge = new Challenge([
            "question" => $request->question,
            "category" => $request->category,
            "answer" => $request->answer,
        ]);
        $challenge->save();

        $title = "Retos";
        return view('platform.challenges', compact("title", "user"));
    }
}
