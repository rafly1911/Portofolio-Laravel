
  <header class="main-header">
    <div class="container">
      <nav class="navbar navbar-expand-lg main-nav px-0 ">
        <a class="navbar-brand" href="/mojo">
				  <img src="{{ asset('assets/img/logo.png') }}" alt="Fadriansyah.Com">
				</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar icon-bar-1"></span>
                        <span class="icon-bar icon-bar-2"></span>
                        <span class="icon-bar icon-bar-3"></span>
                    </button>
        <div class="collapse navbar-collapse" id="mainMenu">
          <ul class="navbar-nav ml-auto text-uppercase f1">
            <li>
              <a href="{{ route('home') }}" class="active active-first">home</a>
            </li>
            <li>
              <a href="{{ route('myskill') }}">MySkill</a>
            </li>
            <li>
              <a href="{{ route('portofolio') }}">Portofolio</a>
            </li>
            <li>
              <a href="{{ route('contact') }}">Contact</a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
    <!-- /.container -->
  </header>
  