@extends('be.layouts.index')
@section('title')
list
@endsection
@section('content')

<!-- START PAGE CONTENT-->
<div class="page-content fade-in-up">

    @include('msg')
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Danh sách bài dự thi</div>
        </div>
        <div class="ibox-body" style="overflow-x:auto;">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>First name</th>
                        <th>DoB</th>
                        <th>Class</th>
                        <th>Grade</th>
                        <th>School</th>
                        <th>Address</th>
                        <th>Ward</th>
                        <th>District</th>
                        <th>Province</th>
                        <th>Parent name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Name link</th>
                        <th>Link</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>First name</th>
                        <th>DoB</th>
                        <th>Class</th>
                        <th>Grade</th>
                        <th>School</th>
                        <th>Address</th>
                        <th>Ward</th>
                        <th>District</th>
                        <th>Province</th>
                        <th>Parent name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Name link</th>
                        <th>Link</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($contestants as $cont)
                    <tr>
                        <td>{{$cont->id}}</td>
                        <td>{{$cont->name}}</td>
                        <td>{{$cont->firstname}}</td>
                        <td>{{$cont->dob}}</td>
                        <td>{{$cont->class}}</td>
                        <td>{{$cont->grade}}</td>
                        <td>{{$cont->school}}</td>
                        <td>{{$cont->address}}</td>
                        <td>{{$cont->ward}}</td>
                        <td>{{$cont->district}}</td>
                        <td>{{$cont->province}}</td>
                        <td>{{$cont->parentname}}</td>
                        <td>{{$cont->email}}</td>
                        <td>{{$cont->phone}}</td>
                        <td>{{$cont->name_link}}</td>
                        <td>{{$cont->link}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                href="admin/contestants/edit/{{$cont->id}}">Edit {{$cont->id}}</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/contestants/delete/{{$cont->id}}"> Delete</a></td>

                    </tr>
                    @endforeach
                </tbody>


            </table>
            
        </div>
    </div>
</div>
{{$cont->id}}
<!-- END PAGE CONTENT-->
@endsection
@section('script')

<script src="assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10,
            //"ajax": './assets/demo/data/table_data.json',
            /*"columns": [
                { "data": "name" },
                { "data": "office" },
                { "data": "extn" },
                { "data": "start_date" },
                { "data": "salary" }
            ]*/
        });
    })
</script>
@endsection