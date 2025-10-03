@php
    $footerServices = [
        ['title' => 'Mua & nạp thẻ Garena', 'url' => '#'],
        ['title' => 'Giờ reset câu thủ', 'url' => '#'],
        ['title' => 'Tố cáo scam', 'url' => '#'],
        ['title' => 'Giải đấu cộng đồng', 'url' => '#'],
    ];

    $footerUtilities = [
        ['title' => 'Review câu thủ', 'url' => '#'],
        ['title' => 'Chợ câu thủ', 'url' => '#'],
        ['title' => 'Thẻ câu thủ +8 +9', 'url' => '#'],
        ['title' => 'Dịch vụ khác', 'url' => '#'],
    ];

    $footerQuickLinks = [
        ['title' => 'Đăng ký', 'url' => '#'],
        ['title' => 'Đăng nhập', 'url' => '#'],
        ['title' => 'Tài khoản', 'url' => '#'],
        ['title' => 'Hướng dẫn', 'url' => '#'],
    ];

    $socialLinks = [
        ['icon' => 'facebook', 'url' => '#'],
        ['icon' => 'youtube-play', 'url' => '#'],
        ['icon' => 'twitter', 'url' => '#'],
        ['icon' => 'telegram', 'url' => '#'],
        ['icon' => 'instagram', 'url' => '#'],
    ];
@endphp

<footer id="footer">
    <div class="footer-background">
        <div class="garena-pattern"></div>
    </div>

    <div class="footer-content">
        <div class="uk-container uk-container-center">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-4">
                    <div class="footer-brand">
                        <img src="https://napfco.com/wp-content/uploads/2025/07/logo-napfco.png" alt="NAPFCO.COM"
                            class="footer-logo">
                        <ul class="footer-contact">
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Địa chỉ: Thành Phố Tân An, Long An</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <span>Hotline: 038.692.8972</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <span>Email: napfco.com@gmail.com</span>
                            </li>
                        </ul>
                        <div class="footer-social">
                            <a href="#" class="social-icon" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon" target="_blank">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <a href="#" class="social-icon" target="_blank">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="#" class="social-icon" target="_blank">
                                <i class="fa-brands fa-telegram"></i>
                            </a>
                            <a href="#" class="social-icon" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2"> <!-- Chiếm 50% = 2 cột -->
                    <div class="footer-column-double">
                        <h3 class="footer-title">DỊCH VỤ CỦA CHÚNG TÔI</h3>

                        <!-- Grid 2 cột bên trong -->
                        <div class="footer-double-content">
                            <ul class="footer-links">
                                @foreach ($footerServices as $service)
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <a href="{{ $service['url'] }}">{{ $service['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <ul class="footer-links">
                                @foreach ($footerUtilities as $utility)
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <a href="{{ $utility['url'] }}">{{ $utility['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Cột 2 -->


                <!-- Cột 4 -->
                <div class="uk-width-medium-1-4">
                    <div class="footer-column">
                        <h3 class="footer-title">LIÊN KẾT NHANH</h3>
                        <ul class="footer-links">
                            @foreach ($footerQuickLinks as $link)
                                <li>
                                    <i class="fa-solid fa-angle-right"></i>
                                    <a href="{{ $link['url'] }}">{{ $link['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copy -->
    <div class="footer-copyright">
        <div class="uk-container uk-container-center">
            <p>Copyright 2025 © NAPFCO.COM - Nạp FCONLINE, Mua Thẻ Garena, Giờ Reset Cầu Thủ, Review Mua Bán Cầu Thủ FC
                Online | Thiết kế bởi ABC</p>
        </div>
    </div>
</footer>

