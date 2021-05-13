<aside class="sidebar">
    <div class="toggle">
        <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
        </a>
    </div>
    <div class="side-inner">

      <div class="logo">
        <span>@user_initials</span>
      </div>

      <div class="nav-menu">
        <ul>
          <li {{ (Route::current()->getName() == 'home') ? 'class=active' : '' }}><a href="{{ route('home') }}">Home</a></li>
          <li><a href="#">APH 200 Horas</a></li>
          <li><a href="#">APH 80 Horas</a></li>
          <li><a href="#">Injetáveis</a></li>
          <li><a href="#">Aeromédico</a></li>
          <li><a href="#">Suporte Básico</a></li>
          <li><a href="#">Suporte Avançado</a></li>
          <hr>
          <li {{ (Route::current()->getName() == 'profile.show') ? 'class=active' : '' }}><a href="{{ route('profile.show') }}">Perfil</a></li>
          <li>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                  this.closest('form').submit();">
                      {{ __('Log Out') }}
                  </a>
              </form>
            </li>
        </ul>
      </div>

      <div class="featured-users">
        <h3>Instrutores EMG1</h3>
        <ul>
          <li class="person">
            <a href="#" class="d-flex align-items-center">
              <img src="{{ asset('images/person_1.jpg') }}" alt="Image" class="img-responsive mr-3">
              <span class="user-name">Matt</span>
            </a>
          </li>
          <li class="person">
            <a href="#" class="d-flex align-items-center">
              <img src="{{ asset('images/person_2.jpg') }}" alt="Image" class="img-responsive mr-3">
              <span class="user-name">Spike</span>
            </a>
          </li>
          <li class="person">
            <a href="#" class="d-flex align-items-center">
              <img src="{{ asset('images/person_3.jpg') }}" alt="Image" class="img-responsive mr-3">
              <span class="user-name">Jassy</span>
            </a>
          </li>
          <li class="person">
            <a href="#" class="d-flex align-items-center">
              <img src="{{ asset('images/person_4.jpg') }}" alt="Image" class="img-responsive mr-3">
              <span class="user-name">William</span>
            </a>
          </li>
          <li class="person">
            <a href="#" class="d-flex align-items-center">
              <img src="{{ asset('images/person_1.jpg') }}" alt="Image" class="img-responsive mr-3">
              <span class="user-name">Johan</span>
            </a>
          </li>
          <li class="person">
            <a href="#" class="d-flex align-items-center">
              <img src="{{ asset('images/person_2.jpg') }}" alt="Image" class="img-responsive mr-3">
              <span class="user-name">Charise</span>
            </a>
          </li>
          <li class="person">
            <a href="#" class="d-flex align-items-center">
              <img src="{{ asset('images/person_3.jpg') }}" alt="Image" class="img-responsive mr-3">
              <span class="user-name">James</span>
            </a>
          </li>
          <li class="person">
            <a href="#" class="d-flex align-items-center">
              <img src="{{ asset('images/person_4.jpg') }}" alt="Image" class="img-responsive mr-3">
              <span class="user-name">Chris</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
</aside>
