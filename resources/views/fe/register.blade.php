@extends('fe.layouts.index')
@section('title')
list
@endsection
@section('content')

@include('msg')
<div class="col-md-8">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">
                <h1>Thêm bài dự thi</h1>
            </div>
            <div class="ibox-tools">
                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
            </div>
        </div>

    </div>
</div>

<div class="col-md-12">


    <div class="ibox-body">
        <form action="{{route('register')}}" method="post" class="form-horizontal" id="form-sample-1"
            novalidate="novalidate">
            {{ csrf_field() }}
            <div class="col-md-6">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="name" type="text" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">first name</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="firstname" type="text" placeholder="first Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">DoB</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="dob" type="text" placeholder="DOB">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">class</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="class" type="text" placeholder="class">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">grade</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="grade" type="text" placeholder="grade">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">school</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="school" type="text" placeholder="school">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">address</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="address" type="text" placeholder="address">
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ward</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="ward" type="text" placeholder="ward">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">district</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="district" type="text" placeholder="district">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">province</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="province" type="text" placeholder="province">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">parentname</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="parentname" type="text" placeholder="parentname">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="email" type="text" placeholder="Email address">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">phone</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="phone" type="text" placeholder="phone">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">name_link</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="name_link" type="text" placeholder="name_link">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">link</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="link" type="text" placeholder="link">
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-8 ml-sm-auto">
                    <button class="btn btn-info" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-md-12" align:center>
        <h2>Modal Example</h2>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection