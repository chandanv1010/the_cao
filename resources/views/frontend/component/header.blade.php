@php
    $socialItem = ['facebook', 'google', 'tiktok', 'twitter'];
@endphp
<div id="header" class="pc-header uk-visible-large">
    <header class="header">
        <div class="uk-container uk-container-center">
            <div class="header-wrapper uk-flex uk-flex-middle">
                <div class="header-logo">
                    <a href="#">
                        <img src="https://napfco.com/wp-content/uploads/2025/07/logo-napfco.png" alt="Logo">
                    </a>
                </div>
                <nav>
                    <ul class="uk-navbar-nav header-nav uk-margin-left">
                        <li><a href="#">Trang Chủ</a></li>
                        <li><a href="#">Thẻ Garena</a></li>
                        <li><a href="#">Nạp Chiết Khấu</a></li>
                        <li><a href="#">Tiện Ích</a></li>
                        <li class="uk-parent" data-uk-dropdown>
                            <a href="#">Hướng Dẫn <i class="fa fa-caret-down"></i></a>
                            <div class="uk-dropdown uk-dropdown-navbar">
                                <ul class="uk-nav uk-nav-navbar">
                                    <li><a href="#">Hướng dẫn A</a></li>
                                    <li><a href="#">Hướng dẫn B</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="header-actions uk-flex">
                    <a href="#" class="uk-button btn-login">Đăng Nhập</a>
                    <a href="#" class="uk-button btn-balance uk-margin-left">
                        Nạp số dư <i class="fa-solid fa-briefcase"></i> 
                    </a>
                </div>
            </div>
        </div>
    </header>

</div>


@include('frontend.component.header-mobile')
{{-- @include('frontend.auth.index') --}}
