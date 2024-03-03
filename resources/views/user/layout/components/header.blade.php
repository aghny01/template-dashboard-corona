<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>
                        <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                        <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 

                        <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                        <li class="scroll-to-section"><a href="#reservation">Reservasi</a></li> 
                        <li class="scroll-to-section">
                            @if (Auth::check())
                            <div>
                                <li class="scroll-to-section">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <button class="preview-subject mb-1 btn btn-danger px-4 py-1" href="{{ route('logout') }}">
                                            {{ __('Log Out') }}
                                        </button>
                                    </form>
                                </li>
                            </div>
                                @else
                            <div>
                                <li class="scroll-to-section btn btn-danger px-4 py-1">
                                    <a href="{{ route('login.index') }}">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="scroll-to-section btn btn-danger px-4 py-1">
                                        <a href="{{ route('login.register') }}">Register</a>
                                    </li>
                                @endif
                            </div>
                        @endif
                        
                        </li> 
                    </ul>        
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->