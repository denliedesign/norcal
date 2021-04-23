<div class="jumbotron jumbotron-fluid bg-gray jumbo-footer mb-0 pb-3 pt-4">
    <div class="footer text-center d-flex align-items-center">
        <div class="footer-items">
            <div class="row">
                <div class="mb-5 mb-md-0 col-md-2 d-flex justify-content-center">
                    <div class="copyright-items">
                        <img src="/images/norcal-cheer-logo.png" alt="">
                        <p class="pt-2"><small class="text-muted">&#169; 2021</small></p>
                    </div>
                </div>
                <div class="mb-5 mb-md-0 col-md-3 footer-section">
                    <p class="text-white footer-title">NAV</p>
                    <ul class="nav flex-column">
                        @include('nav')

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Staff Login') }}</a>
                            </li>
                            {{--                    @if (Route::has('register'))--}}
                            {{--                        <li class="nav-item">--}}
                            {{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            {{--                        </li>--}}
                            {{--                    @endif--}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    {{--                            <a class="dropdown-item" href="{{ url('admin') }}">Admin</a>--}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
                <div class="mb-5 mb-md-0 col-md-3 footer-section">
                    <p class="text-white footer-title">CONTACT</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <ion-icon name="location"></ion-icon>
                            3901 Walnut Blvd, Suite C, Brentwood, CA 94513
                        </li>
                        <li class="nav-item">
                            <ion-icon name="call"></ion-icon>
                            925-420-4855
                        </li>
                        <li class="nav-item">
                            <ion-icon name="mail"></ion-icon>
                            ???@gmail.com
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div style="width: 100%"><iframe width="100%" height="275" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=100%25&amp;hl=en&amp;q=3901%20Walnut%20Blvd,%20Brentwood,%20CA%2094513+(East%20County%20Performing%20Arts%20Center)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div>
            <p class="pt-5" id="credit"><a href="https://denliedesign.com/" target="_blank"><small class="text-muted">Denlie Design</small></a></p>
        </div>
    </div>
</div>
