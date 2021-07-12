<?php

declare(strict_types = 1);

namespace Common\Infrastructure\Http\Controllers;

use Illuminate\View\View;

final class WelcomeController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }
}
