          <div class="container-fluid">
              <nav class="navbar navbar-expand-md navbar-secondary bg-white shadow-sm ">

                  <strong> <a class="navbar-brand p-4" href="{{ url('/') }}">
                          {{ config('app.name', 'Flight_Permission_System') }}
                          <i class="fas fa-plane-departure  text-info"></i>
                      </a> </strong>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">

                      <!-- Left Side Of Navbar -->
                      <ul class="navbar-nav mr-auto ">
                          @auth
                          <!-- Admin options dropdown -->
                          <li class="nav-item dropdown border  m-2">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{__('Admin Options')}} <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a href="{{route('admin.newUser.selectUserType')}}" class="dropdown-item"> Add New User </a>
                              </div>

                          </li>

                          <li class="nav-item dropdown border  m-2">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{__('CAA Options')}} <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a href="{{route('flights.all') }}" class="dropdown-item"> Approved Flights </a>
                              </div>

                          </li>

                          <!-- Agent Options dropdown -->
                          <li class="nav-item dropdown border m-2">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{__('Agent Options')}} <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a href="{{route('requests.new.fresh')}}" class="dropdown-item"> Start new request </a>
                              </div>

                          </li>


                          <li class="nav-item  m-2">
                              <a class="nav-link" href="{{ route('flights.all') }}">{{ __('Flights') }}</a>
                          </li>
                          @endauth
                      </ul>

                      <!-- Right Side Of Navbar -->
                      <ul class="navbar-nav ml-auto">
                          <!-- Authentication Links -->
                          @auth
                          <li class="nav-item">
                              <a class="nav-link" href="{{route('requests.all')}}">{{ __('New Submissions')}} <i class="fas fa-plane"></i></a>
                          </li>
                          <li class="nav-item bg-info ">
                              <a class="nav-link text-warning" href="{{ route('admin.dashboard', Auth::user()) }}">{{ __('Admin Dashboard') }}</a>
                          </li>
                          <li class="nav-item  ">
                              <a class="nav-link" href="{{ route('dashboard.index', Auth::user()) }}">{{ __('My Dashboard') }}</a>
                          </li>




                          @endauth
                          @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                          @endif
                          @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->username }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                          @endguest
                      </ul>
                  </div>

              </nav>
          </div>
