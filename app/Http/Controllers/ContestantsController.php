<?php

namespace App\Http\Controllers;

use App\Contestants;
use Illuminate\Http\Request;

class ContestantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contestants = Contestants::All();
        return view('be/contestants/list', ['contestants'=>$contestants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('be/contestants/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Contestants  $contestants
     * @return \Illuminate\Http\Response
     */
    public function show(Contestants $contestants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contestants  $contestants
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cont = Contestants::find($id);
        return view('be/contestants/edit', ['cont'=>$cont]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contestants  $contestants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, $id)
    {
        $this->validate($rq,[

        ],[

        ]);
        $conts = Contestants::find($id);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contestants  $contestants
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cont = Contestants::find($id);
        $cont->delete();
        return redirect('admin/contestants/list')->with('msg', 'Xóa bài thi thành công !');
    }
}
