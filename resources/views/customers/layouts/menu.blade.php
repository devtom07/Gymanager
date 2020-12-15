<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('admin')}}/images/logogym.gif" alt="" width="200px">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1" id='active_nav'>
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list nav">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ route('khachhang.index') }}">
                                <i class="fas fa-tachometer-alt"></i>Ca tập</a>
                        </li>
                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dịch vụ trực tuyến</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('khachhang.index') }}">Gia hạn gói tập</a>
                                </li>
                                <li>
                                    <a href="{{ route('khachhang.index') }}">Đổi PT</a>
                                </li>
                            </ul>
                        </li>
                        {{-- @foreach($customer_account as $profile) --}}
                        <li>
                            <a href="{{ route('profile',\Illuminate\Support\Facades\Auth::guard('customer_accounts')->user()->id) }}">
                                <i class="fas fa-table"></i>Thông tin cá nhân</a>
                        </li>
                        {{-- @endforeach --}}
                    </ul>
                </nav>
            </div>
        </aside>