    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <strong>Bali Drive Tour</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link  text-center" href="{{ route('home') }}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="{{ route('home.about') }}">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="{{ route('home.paket') }}">Paket Tour</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="{{ route('home.hubungi') }}">Hubungi Kami</a>
            </li>
            <li>
              <a href="{{ route('home.book') }}"class="nav-link text-center btn btn-warning text-white hover-more" style="border-radius:50px;padding-left:10px!important;padding-right:10px!important;">&nbsp;&nbsp;&nbsp;Book Now!&nbsp;&nbsp;&nbsp;</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>