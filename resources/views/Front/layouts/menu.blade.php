<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">{{$profil->title}}</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('storage/'.$profil->image) }}" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="#about">Haqqimda</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="#experience">Tecrube</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="#education">Tehsil</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="#skills">Bilikler</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="#project">Layiheler</a></li>
                   
                </ul>
            </div>
        </nav>