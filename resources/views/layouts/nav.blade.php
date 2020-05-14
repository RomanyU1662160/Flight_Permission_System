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
                          @if(Auth::user()->roles->contains(1))
                          <!-- Admin options dropdown -->
                          <li class="nav-item dropdown border  m-2">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{__('Admin Options')}} <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a href="{{route('admin.newUser.selectUserType')}}" class="dropdown-item"> Add New User </a>
                                  <a href="{{ route('admin.dashboard', Auth::user()) }}" class="dropdown-item"> {{__('Admin Dashboard')}} </a>
                              </div>

                          </li>
                          @endif
                          @if(Auth::user()->roles->contains(2))
                          <li class="nav-item dropdown border  m-2">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{__('CAA Options')}} <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a href="{{route('flights.approved') }}" class="dropdown-item p-1"> Approved Flights </a>
                                  <a href="{{route('flights.submitted') }}" class="dropdown-item p-1"> new submissions </a>
                                  <a href="{{route('flights.pending') }}" class="dropdown-item p-1"> Pending submissions </a>
                                  <a href="{{route('flights.rejected') }}" class="dropdown-item p-1"> Rejected submissions </a>
                                  <a href="{{route('dashboard.report.custom')}}" class="dropdown-item p-1"> Create Reports </a>
                              </div>
                          </li>
                          @endif

                          @if(Auth::user()->roles->contains(3) || Auth::user()->roles->contains(4) )
                          <!-- Agent Options dropdown -->
                          <li class="nav-item dropdown border m-2">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{__('Agent Options')}} <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a href="{{route('requests.new.fresh')}}" class="dropdown-item"> {{__('Start new request')}} </a>
                              </div>
                          </li>

                          @endif
                          @if(Auth::user()->roles->contains(2))
                          <li class="nav-item  m-2">
                              <a class="nav-link" href="{{ route('flights.all') }}">{{ __('Flights') }}</a>
                          </li>
                          @endif
                          @endauth

                      </ul>

                      <!-- Right Side Of Navbar -->
                      <ul class="navbar-nav ml-auto">
                          <!-- Authentication Links -->
                          @auth
                          @if(Auth::user()->roles->contains(2))
                          <li class="nav-item">
                              <a class="nav-link" href="{{route('requests.all')}}">{{ __('New Submissions')}} <i class="fas fa-plane"></i></a>
                          </li>
                          @endif

                          <li class="nav-item  ">
                              <a class="nav-link" href="{{ route('dashboard.index', Auth::user()) }}">{{ __('My Dashboard') }}</a>
                          </li>

                          @if(Auth::user()->roles->contains(1))
                          <li class="nav-item btn btn-outline-info ">
                              <a class="nav-link text-secondary" href="{{ route('admin.dashboard', Auth::user()) }}">{{ __('Admin Dashboard') }}</a>
                          </li>
                          @endif
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
                      @if(App::isLocale('en'))
                      <a class="btn btn-link text-warning mr-4 bg-secondary" href="{{route('locale',$locale='ar')}}"> Ar</a>
                      @else
                      <a class=" btn btn-link text-warning mr-4 bg-secondary" href="{{route('locale',$locale='en')}}"> En</a>
                      @endif
                  </div>

              </nav>
          </div>
