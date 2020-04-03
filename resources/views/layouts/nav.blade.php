       <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
           <div class="container">
               <a class="navbar-brand" href="{{ url('/') }}">
                   {{ config('app.name', 'Laravel') }}
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                   <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <!-- Left Side Of Navbar -->
                   <ul class="navbar-nav mr-auto ">
                       <!-- Admin options dropdown -->
                       <li class="nav-item dropdown border  m-2">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{__('Admin Options')}} <span class="caret"></span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                               <a href="{{route('admin.newUser.selectUserType')}}" class="dropdown-item"> Add New User </a>
                           </div>

                       </li>

                       <!-- Agent Options dropdown -->
                       <li class="nav-item dropdown border m-2">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{__('Agent Options')}} <span class="caret"></span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                               <a href="{{route('requests.new.step1')}}" class="dropdown-item"> Start new request </a>
                           </div>

                       </li>


                       <li class="nav-item  m-2">
                           <a class="nav-link" href="{{ route('flights.all') }}">{{ __('Flights') }}</a>
                       </li>


                   </ul>

                   <!-- Right Side Of Navbar -->
                   <ul class="navbar-nav ml-auto">
                       <!-- Authentication Links -->
                       <li class="nav-item">
                           <a class="nav-link" href="{{route('requests.submitted')}}">{{ __('Requests')}} <i class="fas fa-plane"></i></a>
                       </li>


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
           </div>
       </nav>
