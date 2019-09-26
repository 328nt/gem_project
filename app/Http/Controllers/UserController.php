<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('be/users/list', ['users'=>$users]);
    }

    public function create()
    {
        return view('be/users/add');
    }
    public function store(Request $rq)
    {
        $this->validate($rq,[

        ],[

        ]);
        $user = new User();
        $user->name = $rq->name;
        $user->email = $rq->email;
        $user->password = bcrypt($rq->pwd);
        if ($rq->hasFile('image')) {
            $file = $rq->file('image');
            $name = $file->getClientOriginalName();
            $img = str_random(3)."-".$name;
            while (file_exists("upload/users/".$img))
            {
                $img = str_random(3)."-".$name;
            }
            $file->move("upload/users", $img);
            $user->image = $img;
        } else {
            $user->image = "";
        }
        
        $user->save();
        return redirect('admin/users/list')->with('msg','thêm quản trị viên thành công');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('be/users/edit',['user'=>$user]);
    }
    public function update(Request $rq, $id)
    {
        $this->validate($rq,[

        ],[

        ]);
        $user = User::find($id);
        $user->name = $rq->name;
        $user->email = $rq->email;
        if ($rq->changepwd == "on")
        {
            $this->validate($rq,[

            ],[

            ]);
            $user->password = bcrypt($rq->pwd);
        }
        
        if ($rq->hasFile('image')) {
            $file = $rq->file('image');
            $name = $file->getClientOriginalName();
            $img = str_random(3)."-".$name;
            while (file_exists("upload/users/".$img))
            {
                $img = str_random(3)."-".$name;
            }
            $file->move("upload/users", $img);
            $user->image = $img;
        }
        $user->save();
        return redirect()->back()->with('msg','sửa thông tin thành công');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users/list')->with('msg','xóa quản trị viên thành công !');
    }

    public function getlogin()
    {
        return view('be/login');
    }

    public function postlogin(Request $rq)
    {
        $this->validate($rq,[

        ],[

        ]);
        if (Auth::attempt(['email' => $rq->email, 'password' => $rq->password])) {
            return redirect('admin/users/list');
        } else {
            
            return redirect('admin/login')->with('msg','sai tài khoản rồi thím ơi !');
        }
        
    }
    public function logoutadmin()
    {
        Auth::logout();
        return redirect('admin/login')->with('msg','Đăng xuất thành công bạn ôi !');
    }
}
