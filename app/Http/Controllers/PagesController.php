<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      return view('welcome', [
        'foo' => 'bar',
        'tasks' => ['some task']
      ]);
    }

    public function about()
    {
      return view ('about');
    }

    public function learn()
    {
      return view ('learn');
    }

    public function contact()
    {
      return view ('contact');
    }
    public function projects()
    {
      return view ('projects');
    }
    public function info()
    {
      return  view ('info');
    }
}
