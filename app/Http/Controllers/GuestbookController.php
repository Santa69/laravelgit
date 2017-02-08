<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guestbook;
class GuestbookController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function formulaire() {
    return view('insertGuestbook');
  }
  public function insertOne(Request $request){
    $newBook = new Guestbook;
    $newBook->name = $request->name;
    // $newBook-> name = $request->input('name');
    $newBook->content = $request->content;
    $newBook->save();
    return redirect('/guestbook/formulaire');
  }

}
