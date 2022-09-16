<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <img class="logo-comics" src="assets/images/logo-comics.png" >

            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarTogglerDemo03">

                <ul class="navbar-nav my-navbar-nav mt-2 mt-lg-0 ">

                    <div class="d-flex justify-content-start">
                        <li class="nav-item">
                            <a class="nav-link  my-navlink {{ request()->routeIs('home.index') ? 'active' : '' }}"
                               href="{{ route('home.index') }}">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  my-navlink   {{ request()->routeIs('comics.index') ? 'active' : '' }}"
                               href="{{ route('comics.index') }}">Comics</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link my-navlink" href="{{ route('contacts') }}">Contacts</a>
                        </li>

                    </div>

                </ul>

                <div class="nav-item">
                    <a class="nav-link  my-navlink  {{ request()->routeIs('comics.create') ? 'active' : '' }}"
                       href="{{ route('comics.create') }}">Add New Comic</a>
                </div>

            </div>

        </div>

</header>
