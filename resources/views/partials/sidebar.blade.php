<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/assets/backend/images/icon/admin.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('mobil.index') }}">Mobil</a>
                                </li>
                                <li>
                                    <a href="{{ route('merk.index') }}">Merk</a>
                                </li>
                                <li>
                                    <a href="{{ route('supir.index') }}">Supir</a>
                                </li>
                                <li>
                                    <a href="{{ route('booking.index') }}">Booking</a>
                                </li>
                                <li>
                                    <a href="{{ route('pengembalian.index') }}">Pengembalian</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('mobil.index') }}">
                                <i class="fa fa-automobile" style="font-size:24px"></i>Mobil</a>
                        </li>
                        <li>
                            <a href="{{ route('merk.index') }}">
                                <i class="fa fa-area-chart" style="font-size:24px"></i>Merk</a>
                        </li>
                        <li>
                            <a href="{{ route('supir.index') }}">
                                <i class="fa fa-address-book" style="font-size:24px"></i></i>Supir</a>
                        </li>
                        <li>
                            <a href="{{ route('booking.index') }}">
                                <i class="fa fa-hourglass-2" style="font-size:24px"></i>Booking</a>
                        </li>
                        <li>
                            <a href="{{ route('pengembalian.index') }}">
                                <i class="fa fa-handshake-o" style="font-size:24px"></i>Pengembalian</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>