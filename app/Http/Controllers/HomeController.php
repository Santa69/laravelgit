<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

//
use App\Guestbook;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      $guestbooks = Guestbook::all();
      return view('home', ['guestbooks' => $guestbooks]);
    }
}
