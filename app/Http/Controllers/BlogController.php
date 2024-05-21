<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('blog', [
            'tasks' => loadTasks()
        ]);
    }
}
