<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\User;


class InertiaTestController extends Controller
{
    public function oldindex(Event $event){
        // dd("cvbnm,");
        return Inertia::render('Event/Show', [
            'event' => $event->only(
                'id',
                'title',
                'start_date',
                'description'
            ),
        ]);
    }

    public function index()
    {

       $conf=  \Config::get('app.db_name');

       dd($conf);

        $users = User::all();
        return Inertia::render('Users/Index', [
            'users' => $users,
        ]);
    }
}
