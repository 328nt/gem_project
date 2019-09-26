<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('be/news/list',['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('be/news/add');
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
            'title' => 'required|max:500',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required',

        ],[
            'title.required' =>'chưa nhập tiêu đề',
            'description.required' =>'chưa nhập tóm tắt',
            'content.required' =>'chưa nhập nội dung',
            'image.required' => 'vui lòng nhập ảnh',

        ]);
        $news = new News();
        $news->title = $rq->title;
        $news->slug_title = str_slug($rq->title);
        $news->description = $rq->description;
        $news->content = $rq->content;
        if ($rq->hasFile('image')) {
            $file = $rq->file('image');
            $name = $file->getClientOriginalName();
            $img = str_random(4)."-".$name;
            while (file_exists("upload/news/".$img)){
                $img = str_random(4)."-".$name;
            }
            $file->move("upload/news", $img);
            $news->image = $img;
        } else {
            $news->image = "";
        }
        $news->save();
        return redirect('admin/news/list')->with('msg','thêm bài viết thành công !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = News::find($id);
        return view('be/news/edit', ['new'=>$new]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $rq, $id)
    {
        $this->validate($rq,[

        ],[

        ]);
        $new = News::find($id);
        $new->title = $rq->title;
        $new->slug_title = str_slug($rq->title);
        $new->description = $rq->description;
        $new->content = $rq->content;
        if ($rq->HasFile('image')) {
            $file = $rq->file('image');
            $name = $file->getClientOriginalName();
            $img = str_random(4)."-".$name;
            while (file_exists("upload/news/".$img)){
                $img = str_random(4)."-".$name;
            }
            $file->move("upload/news", $img);
            unlink("upload/news/".$new->image);
            $new->image = $img;
        }
        
        $new->save();
        return redirect('admin/news/edit/'.$id)->with('msg','Sửa bài viết thành công thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $news = News::find($id);
        $news->delete();
        return redirect('admin/news/list')->with('msg', 'xóa bài viết thành công');
    }
}
