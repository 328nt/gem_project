
@extends('be.layouts.index')
@section('title')
edit contestants
@endsection
@section('content')

@include('msg')
<div class="col-md-12">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Thêm nhân viên</div>
            <div class="ibox-tools">
                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="ibox-body">
            <form action="admin/contestants/edit/{{$cont->id}}"  method="post" enctype="multipart/form-data" class="form-horizontal" id="form-sample-1" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">

                        <div class="col-md-6">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="name" type="text" value="{{$cont->name}}" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">first name</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="firstname" type="text"value="{{$cont->firstname}}" placeholder="first Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">DoB</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="dob" type="text" value="{{$cont->dob}}" placeholder="DOB">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">class</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="class" type="text" value="{{$cont->class}}" placeholder="class">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">grade</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="grade" type="text" value="{{$cont->grade}}" placeholder="grade">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">school</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="school" type="text" value="{{$cont->school}}" placeholder="school">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">address</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="address" type="text" value="{{$cont->address}}" placeholder="address">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ward</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="ward" type="text" value="{{$cont->ward}}" placeholder="ward">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">district</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="district" type="text" value="{{$cont->district}}" placeholder="district">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">province</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="province" type="text" value="{{$cont->province}}" placeholder="province">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">parentname</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="parentname" type="text" value="{{$cont->parentname}}" placeholder="parentname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="email" type="text" value="{{$cont->email}}" placeholder="Email address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">phone</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="phone" type="text" value="{{$cont->phone}}" placeholder="phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">name_link</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="name_link" type="text" value="{{$cont->name_link}}" placeholder="name_link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">link</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="link" type="text" value="{{$cont->link}}" placeholder="link">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                <div class="form-group row">
                    <div class="col-sm-10 ml-sm-auto">
                        <button class="btn btn-info" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('script')

<script>
        $(document).ready(function(){
            $("#changepassword").change(function(){
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }
            })
        })
    </script>

<script src="assets/js/scripts/form-plugins.js" type="text/javascript"></script>
<script type="text/javascript">
    $("#form-sample-1").validate({
        rules: {
            name: {
                minlength: 2,
                required: !0
            },
            email: {
                required: !0,
                email: !0
            },
            url: {
                required: !0,
                url: !0
            },
            number: {
                required: !0,
                number: !0
            },
            min: {
                required: !0,
                minlength: 3
            },
            max: {
                required: !0,
                maxlength: 4
            },
            password: {
                required: !0
            },
            password_confirmation: {
                required: !0,
                equalTo: "#password"
            }
        },
        errorClass: "help-block error",
        highlight: function(e) {
            $(e).closest(".form-group.row").addClass("has-error")
        },
        unhighlight: function(e) {
            $(e).closest(".form-group.row").removeClass("has-error")
        },
    });
</script>
<script src="assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
@endsection