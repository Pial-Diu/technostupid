<nav class="navbar navbar-expand-sm navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('portfolio')}}"><i class="fas fa-code"></i> TechnoStupid</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="{{route('portfolio')}}" class="nav-link"><span data-hover="Back to Portfolio">Back to Portfolio</span></a>
                </li>
                
            </ul>

            <ul class="navbar-nav ml-lg-auto" onclick="colorMode()">
                <div class="ml-lg-4">
                    <div class="color-mode d-lg-flex justify-content-center align-items-center">
                    <i class="color-mode-icon"></i>
                    Color mode
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>