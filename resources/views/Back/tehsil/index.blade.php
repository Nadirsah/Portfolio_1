@extends("back.layouts.master")
@section("title","Panel")
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tehsil</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cedvel <span><a href="{{route('admin.education.create')}}"><i
                            class="btn btn-success fa-solid fa-circle-plus"></i></a></span></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Text</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $info)
                        <tr>
                            <th>{{$info->title}}</th>
                            <th>{!!$info->text!!}</th>
                            <th> <a href="{{route('admin.education.edit',$info->id)}}"><i
                                        class="btn btn-info fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{route('admin.delete.education',$info->id)}}"><i
                                    class="btn btn-danger fa-solid fa-trash"></i></a>
                            </th>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- Sweet Alert -->
@if(Session::has('message'))
<script>
swal('Message', "{{Session::get('message')}}", 'success', {
    button: true,
    button: 'OK',
    timer: 6000,
    dangerMode: true,
});

</script>
@endif
@endsection