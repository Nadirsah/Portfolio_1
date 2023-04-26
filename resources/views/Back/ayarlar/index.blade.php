@extends("back.layouts.master")
@section("title","Panel")
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ayarlar</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cedvel <span><a href="{{route('admin.ayarlar.create')}}"><i
                            class="btn btn-success fa-solid fa-circle-plus"></i></a></span></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Text</th>
                            <th>Activ-Passiv</th>
                            <th>Logo</th>
                            <th>Sekil</th>
                            <th>Favicon</th>
                            <th>Facebook</th>
                            <th>Github</th>
                            <th>Linkedin</th>
                            <th>Email</th>
                            <th>Telefon</th>
                            <th>Seher</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{$data->title}}</th>
                            <th>{!!$data->text!!}</th>
                            <th>{{ $data->activ == 1 ? 'Activ' : ($data->activ == 0 ? 'Deactiv' : '') }}</th>
                            <th><img src="{{ asset('storage/'.$data->logo) }}" width="50" alt=""></th>
                            <th><img src="{{ asset('storage/'.$data->image) }}" width="50" alt=""></th>
                            <th><img src="{{ asset('storage/'.$data->favicon) }}" width="50" alt=""></th>
                            <th>{{$data->facebook}}</th>
                            <th>{{$data->github}}</th>
                            <th>{{$data->in}}</th>
                            <th>{{$data->email}}</th>
                            <th>{{$data->phone}}</th>
                            <th>{{$data->city}}</th>
                            <th> <a href="{{route('admin.ayarlar.edit',$data->id)}}"><i
                                        class="btn btn-info fa-solid fa-pen-to-square"></i></a>
                                
                            </th>

                        </tr>
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