<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contestants;

class PagesController extends Controller
{
    public function create()
    {
        return view('fe/register');
    }

    public function store(Request $rq)
    {
        $this->validate($rq,[

        ],[

        ]);
        $conts = new Contestants();
        $conts->name = $rq->name;
        $conts->firstname = $rq->firstname;
        $conts->dob = $rq->dob;
        $conts->class = $rq->class;
        $conts->grade = $rq->grade;
        $conts->school = $rq->school;
        $conts->address = $rq->address;
        $conts->ward = $rq->ward;
        $conts->district = $rq->district;
        $conts->province = $rq->province;
        $conts->parentname = $rq->parentname;
        $conts->email = $rq->email;
        $conts->phone = $rq->phone;
        $conts->name_link = $rq->name_link;
        $conts->link = $rq->link;
        $conts->save();
        return redirect()->back()->with('msg','okla');
    }
}
