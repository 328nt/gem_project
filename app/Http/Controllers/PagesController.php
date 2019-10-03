<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contestants;
use App\News;

class PagesController extends Controller
{
    public function create()
    {
        return view('fe/register');
    }

    public function index()
    {
        $news = News::orderBy('id', 'DESC')->paginate(3);
        return view('fe/pages/index', ['news'=>$news]);
    }
    public function success()
    {
        return view('fe/pages/success');
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
        return redirect('success')->with('msg','okla');
    }


    public function pagenews()
    {
        $spotlight = News::where('hightlight', 1)->orderBy('id','DESC')->take(4)->get();
        $allspl = $spotlight->shift();
        $news = News::orderBy('id', 'DESC')->paginate(6);
        
        return view('fe.pages.pagenews', ['news'=>$news, 'spotlight'=>$spotlight, 'allspl'=>$allspl]);
    }

    public function singlenew($id)
    {
        $new = News::find($id);
        $news = News::orderBy('id', 'DESC')->paginate(3);
        return view('fe.pages.singlenew',['new'=>$new, 'news'=>$news]);
    }

}
