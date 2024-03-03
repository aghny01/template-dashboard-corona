<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Menu;
use App\Models\Chef;
use App\Models\Reservasi;

class HalamanUserController extends Controller
{
    public function index(){
        $about = About::all();
        $menu = Menu::all();
        $chef = Chef::all();
        return view('user.page.index',compact('about','chef','menu'));
    }

    public function show(Reservasi $reservasi)
    {
        $reservasi = Reservasi::orderBy('id','desc')
        ->limit(1)
        ->get();
        ;
        return view('user.page.show', compact('reservasi'));
    }
}
