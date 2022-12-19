<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\userContact;

class contactController extends Controller
{
    public function userContact( Request $request)
    {
      $name = $request->name;
      $email = $request->email;

      $con = new userContact();
      $con->name = $name;
      $con->email = $email;
      $con->save();
      return redirect()->back();

    }

   
}
