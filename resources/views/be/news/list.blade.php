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
            <div class="ibox-title">Data Table</div>
        </div>
        <div class="ibox-body" style="overflow-x:auto;">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>image</th>
                        <th>title</th>
                        <th>description</th>
                        <th>content</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>image</th>
                        <th>title</th>
                        <th>description</th>
                        <th>content</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($news as $new)
                    <tr>
                        <td>{{$new->id}}</td>
                        <td><img width="100px" src="upload/news/{{$new->image}}" alt=""></td>
                        <td>{{$new->title}}</td>
                        <td>{{substr($new->description,0,80)}} ...</td>
                        <td>{{ substr($new->content,0,80) }} ...</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                        href="admin/news/edit/{{$new->id}}">Edit</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a  href="admin/news/delete/{{$new->id}}">{{$new->id}} Delete</a></td>
                                
                    </tr>
                    @endforeach
                </tbody>


            </table>
        </div>
    </div>
</div>
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