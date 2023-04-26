@extends("front.layouts.master")
@section("title","Panel")
@section('content')
</nav>
<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                {{$profil->title}}
            </h1>
            <div class="subheading mb-5">
                {{$profil->city}} · {{$profil->phone}}·
                <a href="mailto:name@email.com">{{$profil->email}}</a>
            </div>
            <p class="lead mb-5">{!!$profil->text!!}</p>
            <div class="d-flex flex-row ">
                @php $socials=['facebook','linkedin','github'];
                @endphp
                @foreach($socials as $social)
                @if($profil->$social!=null)
                <div class="social-icons  " style="margin-left:10px">
                    <a class="social-icon" href="{{$profil->$social}}" target="blank"><i
                            class="fa-brands fa-{{$social}}"></i></a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Experience-->
    <section class="resume-section" id="experience">
        <div class="resume-section-content">
            <h2 class="mb-5">Tecrube</h2>
            @foreach($experin as $experin)
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">{!!$experin->title!!}</h3>
                    <p>{!!$experin->text!!}</p>
                </div>

            </div>
            @endforeach
        </div>

    </section>
    <hr class="m-0" />
    <!-- Education-->
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Tehsil</h2>
            @foreach($education as $educations)
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">{!!$educations->title!!}</h3>
                    <div>{!!$educations->text!!}</div>
                </div>

            </div>
            @endforeach
        </div>
    </section>
    <hr class="m-0" />
    <!-- Skills-->
    <section class="resume-section" id="skills">
        <div class="resume-section-content">
            <h2 class="mb-5 ">Bilikler</h2>
            <div class='d-flex flex-row'>
                @foreach($skills as $skill)
                <ul class="list-inline dev-icons" style="margin-left:20px">
                    <li class="list-inline-item"><i class="fa-brands fa-{{$skill->text}}"></i></li>
                </ul>
                @endforeach
            </div>
        </div>


    </section>
    <hr class="m-0" />
    <!-- Project-->
    <section class="resume-section" id="project">
        <div class="resume-section-content">
            <h2 class="mb-5 ">Layiheler</h2>
            <div class='d-flex flex-row'>
                @foreach($projects as $project)
                <div class="card mb-4 border border-rounded " style="width: 320px;" >
                    <div class="card-header text-center">{!!$project->title!!}</div>
                    <video width="320" height="" controls>
                        <source src="{{ asset('storage/'.$project->project) }}" >
                    </video>
                    <div class="card-header">{!!$project->text!!}</div>
                </div>
                @endforeach
            </div>
        </div>
        

    </section>



</div>

@endsection