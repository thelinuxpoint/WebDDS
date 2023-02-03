<div class="navbar">
       
    <div class="navbar-left">
        
        <div class="navbar-left-content" onclick="toggleStore();">
            <p>Store</p>
            <div class="nav-container-store" hidden="" onmouseleave="toggleStore()">
                <div>
                    <p>Nearby Stores</p>
                </div>
            </div>        
        </div>

        <div class="navbar-left-content" onclick="toggleComputer();">
            <p>Computer</p>  
            <div class="nav-container-computer" hidden="" onmouseleave="toggleComputer()">
                <div>
                    <p>Motherboard</p>
                </div>
                <div>
                    <p>Processors</p>
                </div>
                <div>
                    <p>Graphic Card</p>
                </div>
                <div>
                    <p>CPU Cabinet</p>
                </div>
                <div>
                    <p>Power Supply</p>
                </div>
            </div>
        </div>

        <div class="navbar-left-content" onclick="toggleAccesories();">
            <p>Accesories</p> 
            <div class="nav-container-accesories" hidden="" onmouseleave="toggleAccesories()">
                <div>
                    <p>Cables</p>
                </div>
                
            </div>       
        </div>

        <div class="navbar-left-content" onclick="toggleElectronics();">
            <p>Electronics</p>  
            <div class="nav-container-electronics" hidden="" onmouseleave="toggleElectronics()">
                <div>
                    <p>Electronics</p>
                </div>
            </div>      
        </div>
    </div>
    
    <div class="navbar-right">
        @guest
            @if (Route::has('login'))
                <div class="navbar-right-content">
                    <p>
                        <a style="border-radius: 10px;text-decoration: none;color: white;padding: 10px;background-color: deepskyblue;" href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                    </p>
                </div>
            @endif

            @if (Route::has('register'))
                <div class="navbar-right-content">
                    <p>
                        <a style="border-radius: 10px;text-decoration: none;color: white;padding: 10px;background-color: deepskyblue;" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    </p>
                </div>
            @endif
        @else
            <div class="navbar-right-content">
                <p>
                    <a id="navbarDropdown" style="border-radius: 10px;text-decoration: none;color: white;padding: 10px;background-color: deepskyblue;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                <p>
            </div>

            <div class="navbar-right-content" aria-labelledby="navbarDropdown">
                <p>    
                    <a style="border-radius: 10px;text-decoration: none;color: white;padding: 10px;background-color: deepskyblue;" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </p>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </div>

</div>
<div class="content-center">
    <img src="{{asset('images/g14.svg')}}" style="position:fixed;top:150px;opacity:0.5;z-index:-1;"/> 
</div>
