<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{


    public function index () {
        $members = Member::all();
        $men = Member::where('gender', 'Homme')->limit(3)->get();
        $women = Member::where('gender', 'Femme')->get();
        return view('welcome', compact('members', 'men', 'women'));
    }

    public function menMember () {
        $members = Member::all();
        $men = Member::where('gender', 'homme')->limit(3)->get();
        $women = Member::where('gender', 'femme')->get();
        return view('pages.men', compact('members', 'men', 'women'));
    }



   public function create () {
        return view('pages.member');
    }

   public function store (Request $request) {
        $store = new Member();
        $store->name = $request->name;
        $store->gender = $request->gender;
        $store->age = $request->age;
        $store->save();
        return redirect()->back();
   }

   public function destroy ($id) {
        $delete = Member::find($id);
        $delete->delete();
        return redirect()->back();
   }

}
