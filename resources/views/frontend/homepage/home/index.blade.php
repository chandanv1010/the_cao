@extends('frontend.homepage.layout')
@section('content')
    <div id="homepage" class="homepage">
        @php
            $topBuyers = [
                [
                    'rank' => 1,
                    'username' => '**anngoc',
                    'amount' => '56,160K',
                    'avatar' => 'https://placehold.co/80x80',
                ],
                [
                    'rank' => 2,
                    'username' => '**anngoc',
                    'amount' => '56,160K',
                    'avatar' => 'https://placehold.co/80x80',
                ],
                [
                    'rank' => 3,
                    'username' => '**anngoc',
                    'amount' => '56,160K',
                    'avatar' => 'https://placehold.co/80x80',
                ],
            ];

            $topOthers = [
                ['rank' => 4, 'username' => '**nqhdno3', 'amount' => '56,160K', 'progress' => 100],
                ['rank' => 5, 'username' => '**nqhdno3', 'amount' => '46,160K', 'progress' => 82],
            ];

            $banners = [
                'https://napfco.com/wp-content/uploads/2025/08/napf-2048x808.jpg',
                'https://napfco.com/wp-content/uploads/2024/12/bg-events.jpg',
            ];

            $garenaDenoms = [20000, 200000, 100000, 50000, 1000000, 1500000, 2000000, 500000];

            $posts = [
                [
                    'title' => '[SỰ KIỆN TỶ PHÚ 2.0] TỶ PHÚ THỜI ĐẠI - VƯƠN TẦM [...]',
                    'date' => '24/09/2025',
                    'excerpt' => 'Sự kiện Tỷ phú 2.0 chính thức trở lại, mang đến cho các HLV những siêu ...[đọc thêm]',
                    'image' => 'https://napfco.com/wp-content/uploads/2025/08/napf-2048x808.jpg',
                    'overlay' => 'FC Online Tỷ Phú 2.0 Banner',
                    'link' => '#',
                ],
                [
                    'title' => '[SỰ KIỆN TỶ PHÚ 2.0] TỶ PHÚ THỜI ĐẠI - VƯƠN TẦM [...]',
                    'date' => '24/09/2025',
                    'excerpt' => 'Sự kiện Tỷ phú 2.0 chính thức trở lại, mang đến cho các HLV những siêu ...[đọc thêm]',
                    'image' => 'https://napfco.com/wp-content/uploads/2024/12/bg-events.jpg',
                    'overlay' => 'FC Online HLV Học Trò Chơi Banner',
                    'link' => '#',
                ],
                [
                    'title' => '[SỰ KIỆN TỶ PHÚ 2.0] TỶ PHÚ THỜI ĐẠI - VƯƠN TẦM [...]',
                    'date' => '24/09/2025',
                    'excerpt' => 'Sự kiện Tỷ phú 2.0 chính thức trở lại, mang đến cho các HLV những siêu ...[đọc thêm]',
                    'image' => 'https://napfco.com/wp-content/uploads/2025/08/napf-2048x808.jpg',
                    'overlay' => 'FC Online Đặc Huấn 25TOTS Banner',
                    'link' => '#',
                ],
                [
                    'title' => '[SỰ KIỆN TỶ PHÚ 2.0] TỶ PHÚ THỜI ĐẠI - VƯƠN TẦM [...]',
                    'date' => '24/09/2025',
                    'excerpt' => 'Sự kiện Tỷ phú 2.0 chính thức trở lại, mang đến cho các HLV những siêu ...[đọc thêm]',
                    'image' => 'https://napfco.com/wp-content/uploads/2024/12/bg-events.jpg',
                    'overlay' => 'FC Online Đại Huấn 25TOTS Quang 3 Banner',
                    'link' => '#',
                ],
            ];

            $accountTabs = [
                'doi-hinh' => [
                    'name' => 'ACC ĐỘI HÌNH',
                    'accounts' => [
                        [
                            'price' => '1,200,000 Coin',
                            'original_price' => '1,390,000 Coin',
                            'description' =>
                                'Khi bạn mua INTER 390K TỶ CÓ MINIFACE , TKFCO sẽ tự động trích ra 12,000 quyền góp cho quỹ thiện nguyện',
                            'image' => 'https://napfco.com/wp-content/uploads/2025/08/napf-2048x808.jpg',
                            'hot' => true,
                        ],
                        [
                            'price' => '950,000 Coin',
                            'original_price' => '1,100,000 Coin',
                            'description' =>
                                'Tài khoản có đội hình mạnh với nhiều cầu thủ 5 sao, phù hợp cho người chơi muốn thi đấu ngay',
                            'image' => 'https://napfco.com/wp-content/uploads/2024/12/bg-events.jpg',
                            'hot' => false,
                        ],
                        [
                            'price' => '2,500,000 Coin',
                            'original_price' => '2,800,000 Coin',
                            'description' =>
                                'Đội hình siêu khủng với các cầu thủ TOTS, ICON đầy đủ, sẵn sàng chinh phục mọi giải đấu',
                            'image' => 'https://napfco.com/wp-content/uploads/2025/08/napf-2048x808.jpg',
                            'hot' => true,
                        ],
                        [
                            'price' => '1,800,000 Coin',
                            'original_price' => '2,000,000 Coin',
                            'description' => 'Tài khoản có đội hình cân bằng với nhiều lựa chọn chiến thuật linh hoạt',
                            'image' => 'https://napfco.com/wp-content/uploads/2024/12/bg-events.jpg',
                            'hot' => false,
                        ],
                    ],
                ],
                'gia-tri' => [
                    'name' => 'ACC GIÁ TRỊ',
                    'accounts' => [
                        [
                            'price' => '5,200,000 Coin',
                            'original_price' => '6,000,000 Coin',
                            'description' =>
                                'Tài khoản VIP với giá trị cực cao, sở hữu toàn bộ cầu thủ hiếm và nhiều vật phẩm quý',
                            'image' => 'https://napfco.com/wp-content/uploads/2025/08/napf-2048x808.jpg',
                            'hot' => true,
                        ],
                        [
                            'price' => '3,800,000 Coin',
                            'original_price' => '4,200,000 Coin',
                            'description' => 'Tài khoản có giá trị cao với nhiều cầu thủ ICON và LEGEND độc quyền',
                            'image' => 'https://napfco.com/wp-content/uploads/2024/12/bg-events.jpg',
                            'hot' => false,
                        ],
                        [
                            'price' => '7,500,000 Coin',
                            'original_price' => '8,500,000 Coin',
                            'description' =>
                                'Tài khoản đỉnh cao với collection hoàn chỉnh, phù hợp cho collector chuyên nghiệp',
                            'image' => 'https://napfco.com/wp-content/uploads/2025/08/napf-2048x808.jpg',
                            'hot' => true,
                        ],
                        [
                            'price' => '4,600,000 Coin',
                            'original_price' => '5,100,000 Coin',
                            'description' => 'Tài khoản premium với nhiều cầu thủ limited edition và skin độc quyền',
                            'image' => 'https://napfco.com/wp-content/uploads/2024/12/bg-events.jpg',
                            'hot' => false,
                        ],
                    ],
                ],
            ];
        @endphp

        <section class="homepage-top-section">
            <div class="uk-container uk-container-center">
                <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                    <div class="uk-width-medium-3-10 ">
                        <div class="top-buyers-widget">
                            <div class="widget-header">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>TOP MUA HÀNG THÁNG 09</span>
                            </div>

                            <div class="top-three-section">
                                <div class="top-position rank-2">
                                    <div class="bg-rank">2</div>
                                    <div class="avatar-wrapper">
                                        <img src="{{ $topBuyers[1]['avatar'] }}" alt="{{ $topBuyers[1]['username'] }}">
                                        <div class="avatar-border silver"></div>
                                    </div>
                                    <div class="uk-text-small uk-text-bold">{{ $topBuyers[1]['username'] }}</div>
                                    <div class="uk-text-small uk-text-bold buyer-amount">{{ $topBuyers[1]['amount'] }}</div>
                                </div>

                                <div class="top-position rank-1">
                                    <div class="bg-rank">1</div>
                                    <div class="avatar-wrapper">
                                        <img src="{{ $topBuyers[0]['avatar'] }}" alt="{{ $topBuyers[0]['username'] }}">
                                        <div class="avatar-border gold"></div>
                                        <span class="avatar-trophy"><i class="fa-solid fa-trophy"></i></span>
                                    </div>
                                    <div class="uk-text-small uk-text-bold">{{ $topBuyers[0]['username'] }}</div>
                                    <div class="uk-text-small uk-text-bold buyer-amount-highlight">
                                        {{ $topBuyers[0]['amount'] }}</div>
                                </div>

                                <div class="top-position rank-3">
                                    <div class="bg-rank">3</div>
                                    <div class="avatar-wrapper">
                                        <img src="{{ $topBuyers[2]['avatar'] }}" alt="{{ $topBuyers[2]['username'] }}">
                                        <div class="avatar-border bronze"></div>
                                    </div>
                                    <div class="uk-text-small uk-text-bold">{{ $topBuyers[2]['username'] }}</div>
                                    <div class="uk-text-small uk-text-bold buyer-amount">{{ $topBuyers[2]['amount'] }}
                                    </div>
                                </div>
                            </div>

                            <div class="uk-padding-small">
                                @foreach ($topOthers as $buyer)
                                    <div class="top-list-item uk-margin-small-bottom">
                                        <div class="rank-number uk-text-bold">{{ $buyer['rank'] }}</div>
                                        <div class="uk-text-small uk-text-bold" style="flex: 0 0 auto;">
                                            {{ $buyer['username'] }}</div>
                                        <div class="progress-bar">
                                            <div class="progress-fill" style="width: {{ $buyer['progress'] }}%"></div>
                                        </div>
                                        <div class="uk-text-small uk-text-bold buyer-amount">{{ $buyer['amount'] }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="uk-width-medium-7-10">
                        <div class="uk-slidenav-position banner-slider"
                            data-uk-slideshow="{autoplay:true, autoplayInterval:3000}">
                            <ul class="uk-slideshow">
                                @foreach ($banners as $index => $banner)
                                    <li>
                                        <img src="{{ $banner }}" alt="Banner {{ $index + 1 }}"
                                            class="uk-width-1-1">
                                    </li>
                                @endforeach
                            </ul>
                            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                                <li data-uk-slideshow-item="0"><a href="#"></a></li>
                                <li data-uk-slideshow-item="1"><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="voucher-section">
            <div class="uk-container uk-container-center">
                <h2 class="uk-text-center uk-text-bold section-title">THẺ GARENA</h2>
                <ul class="uk-tab voucher-tab" data-uk-tab="{connect:'#voucher-tabs'}">
                    <li class="uk-active"><a href="#">MUA MÃ THẺ</a></li>
                    <li><a href="#">NẠP SÒ VÀO TÀI KHOẢN</a></li>
                </ul>
                <ul id="voucher-tabs" class="uk-switcher">
                    <li>
                        <div class="uk-grid uk-grid-small" data-uk-grid-margin>
                            <div class="uk-width-medium-7-10 uk-flex uk-margin-top">
                                <div style="width:90%;">
                                    <p class="uk-text-bold uk-margin-large-bottom uk-text-medium">Chọn mệnh giá thẻ</p>
                                    <div class="uk-grid uk-grid-medium uk-flex-center" data-uk-grid-margin>
                                        @foreach ($garenaDenoms as $value)
                                            <div class="voucher-col">
                                                <div class="voucher-card">
                                                    <div class="uk-flex uk-flex-center uk-flex-middle voucher-thumb"> <img
                                                            src="https://official.garena.com/vn/v1/assets/garena_logo_horizontal.svg"
                                                            alt="Garena"> </div>
                                                    <div class="voucher-price uk-text-center uk-text-bold">
                                                        {{ number_format($value, 0, ',', '.') }} đ </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="uk-margin uk-text-muted"> Xem thêm các mệnh giá khác <a href="#">Tại
                                            đây</a> </div>
                                </div>
                            </div>
                            <div class="uk-width-medium-3-10 note-panel">
                                <div class="howto-panel">
                                    <div class="howto-title uk-text-bold uk-margin-top uk-margin-bottom">Làm thế nào để mua
                                        thẻ Garena</div>
                                    <div class="content-howto uk-margin">
                                        <p class="uk-text-muted uk-margin-small-bottom">1. Chọn mệnh giá thẻ (20k, 50k,
                                            100k...)</p>
                                        <p class="uk-text-muted uk-margin-small-bottom">2. Nhập số lượng thẻ.</p>
                                        <p class="uk-text-muted uk-margin-small-bottom">3. Xác nhận & thanh toán.</p>
                                        <p class="uk-text-muted">4. Thẻ Garena hiển thị ngay trên màn hình.</p>
                                    </div>
                                    <div class="howto-note uk-text-bold uk-text-muted uk-margin-top"> Lưu ý : Hệ thống nạp
                                        tiền tự động theo nội dung chuyển khoản nên mỗi mã QR chỉ thanh toán được 1 lần.
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-medium-3-10 order-panel" style="display:none">
                                <div class="howto-panel">
                                    <form class="uk-form uk-form-stacked" id="order-form">
                                        <h3 class="order-title uk-text-center uk-text-uppercase">Chi tiết đơn hàng</h3>

                                        <p>
                                            <strong>Tên sản phẩm:</strong> <span id="order-name">Mua mã thẻ Garena 50</span>
                                        </p>
                                        <p>
                                            <strong>Đơn giá:</strong> <span id="order-price">48.000 ₫</span>
                                        </p>
                                        <p>
                                            <strong>Số lượng:</strong> <span id="order-qty">1</span>
                                        </p>
                                        {{-- <p>
                                            <strong>Tài Khoản Garena:</strong> <span id="order-account">xxxxxxx</span>
                                        </p> --}}

                                        <p class="order-total">
                                            <strong>Tổng tiền:</strong> <span id="order-total">48.000
                                                ₫</span>
                                        </p>
                                        <div class="order-coupon">
                                            <input type="text" placeholder="Mã ưu đãi (nếu có)" name="coupon">
                                            <button type="button" class="apply-btn">Áp dụng</button>
                                        </div>
                                        <div class="uk-margin-top">
                                            <button class="uk-button btn-balance uk-width-1-1">
                                                NẠP THÊM SỐ DƯ <br>
                                                <span class="btn-subtext">Bạn cần thêm 48.000 ₫ để tiếp tục.</span>
                                            </button>
                                        </div>
                                        <div class="uk-margin-top">
                                            <span class="order-note">
                                                Nếu bạn muốn nạp số dư nhiều hơn để sử dụng cho những lần mua hàng tiếp
                                                theo,
                                                vui lòng truy cập trang <a href="#">Nạp số dư tại đây</a>.
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid uk-grid-small" data-uk-grid-margin>
                            <div class="uk-width-medium-7-10 uk-flex uk-margin-top">
                                <div style="width:90%;">
                                    <form class="uk-form uk-form-stacked uk-margin-large">
                                        <div class="uk-form-row"> <label for="account_garena"
                                                class="uk-form-label uk-text-bold uk-margin-medium-bottom uk-text-medium">Tài
                                                khoản Garena</label>
                                            <div class="uk-form-controls"> <input type="text" id="account_garena"
                                                    placeholder="Nhập tài khoản Garena"
                                                    class="uk-form-large uk-width-1-1 uk-form-success"> </div>
                                        </div>
                                    </form>
                                    <div class="uk-grid uk-grid-medium uk-flex-center" data-uk-grid-margin>
                                        @foreach ($garenaDenoms as $value)
                                            <div class="voucher-col">
                                                <div class="voucher-card">
                                                    <div class="uk-flex uk-flex-center uk-flex-middle voucher-thumb"> <img
                                                            src="https://official.garena.com/vn/v1/assets/garena_logo_horizontal.svg"
                                                            alt="Garena"> </div>
                                                    <div class="voucher-price uk-text-center uk-text-bold">
                                                        {{ number_format($value, 0, ',', '.') }} đ </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="uk-margin uk-text-muted"> Xem thêm các mệnh giá khác <a href="#">Tại
                                            đây</a> </div>
                                </div>
                            </div>
                            <div class="uk-width-medium-3-10 note-panel">
                                <div class="howto-panel uk-text-small">
                                    <div class="howto-title uk-text-bold uk-margin-top uk-margin-bottom">Làm thế nào để nạp
                                        sò trực tiếp</div>
                                    <div class="content-howto uk-margin">
                                        <p class="uk-text-muted uk-margin-small-bottom">1. Nhập tài khoản Garena (không
                                            phải tên ingame).</p>
                                        <p class="uk-text-muted uk-margin-small-bottom">2. Chọn mệnh giá nạp.</p>
                                        <p class="uk-text-muted uk-margin-small-bottom">3. Xác nhận thanh toán.</p>
                                        <p class="uk-text-muted">4. Sò sẽ cộng ngay vào tài khoản.</p>
                                    </div>
                                    <div class="howto-note uk-text-bold uk-text-muted uk-margin-top"> Lưu ý : Hệ thống nạp tiền tự động theo nội dung chuyển khoản nên mỗi mã QR chỉ thanh toán được 1 lần. </div>
                                </div>
                            </div>
                            <div class="uk-width-medium-3-10 order-panel" style="display:none">
                                <div class="howto-panel">
                                    <form class="uk-form uk-form-stacked" id="order-form">
                                        <h3 class="order-title uk-text-center uk-text-uppercase">Chi tiết đơn hàng</h3>

                                        <p>
                                            <strong>Tên sản phẩm:</strong> <span id="order-name">Mua mã thẻ Garena
                                                50</span>
                                        </p>
                                        <p>
                                            <strong>Đơn giá:</strong> <span id="order-price">48.000 ₫</span>
                                        </p>
                                        <p>
                                            <strong>Số lượng:</strong> <span id="order-qty">1</span>
                                        </p>
                                        <p>
                                            <strong>Tài Khoản Garena:</strong> <span id="order-account">xxxxxxx</span>
                                        </p>

                                        <p class="order-total">
                                            <strong>Tổng tiền:</strong> <span id="order-total">48.000
                                                ₫</span>
                                        </p>
                                        <div class="order-coupon">
                                            <input type="text" placeholder="Mã ưu đãi (nếu có)" name="coupon">
                                            <button type="button" class="apply-btn">Áp dụng</button>
                                        </div>
                                        <div class="uk-margin-top">
                                            <button class="uk-button btn-balance uk-width-1-1">
                                                NẠP THÊM SỐ DƯ <br>
                                                <span class="btn-subtext">Bạn cần thêm 48.000 ₫ để tiếp tục.</span>
                                            </button>
                                        </div>
                                        <div class="uk-margin-top">
                                            <span class="order-note">
                                                Nếu bạn muốn nạp số dư nhiều hơn để sử dụng cho những lần mua hàng tiếp
                                                theo,
                                                vui lòng truy cập trang <a href="#">Nạp số dư tại đây</a>.
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="account-section">
            <div class="uk-container uk-container-center">
                <h2 class="uk-text-center uk-text-bold section-title uk-margin-bottom">TÀI KHOẢN</h2>

                <div class="account-filter-bar uk-margin-bottom">
                    <div class="uk-flex uk-flex-space-between uk-flex-middle">
                        <div class="uk-flex uk-flex-middle filter-left">
                            <ul class="uk-tab" data-uk-tab="{connect:'#account-switcher'}">
                                <li class="uk-active"><a href="#" class="filter-btn">ACC ĐỘI HÌNH</a></li>
                                <li><span class="filter-divider">|</span></li>
                                <li><a href="#" class="filter-btn">ACC GIÁ TRỊ</a></li>
                            </ul>
                        </div>
                        <div class="filter-right">
                            <div class="uk-button-dropdown" data-uk-dropdown>
                                <button class="uk-button filter-dropdown">TẤT CẢ MỨC GIÁ <i
                                        class="uk-icon-caret-down"></i></button>
                                <div class="uk-dropdown">
                                    <ul class="uk-nav uk-nav-dropdown">
                                        <li><a href="#">Tất cả mức giá</a></li>
                                        <li><a href="#">Dưới 1 triệu</a></li>
                                        <li><a href="#">1-5 triệu</a></li>
                                        <li><a href="#">Trên 5 triệu</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <ul id="account-switcher" class="uk-switcher">
                    @foreach ($accountTabs as $tabKey => $tab)
                        <li>
                            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                                @foreach ($tab['accounts'] as $index => $account)
                                    <div class="uk-width-medium-1-2 uk-width-large-1-4">
                                        <div class="account-card uk-position-relative">
                                            @if ($account['hot'])
                                                <div class="account-badge uk-position-top-left">
                                                    <span class="badge-number">#{{ 3453 + $index }}</span>
                                                </div>
                                            @endif

                                            <div class="account-image">
                                                <img src="{{ $account['image'] }}" alt="Account {{ $index + 1 }}"
                                                    class="uk-width-1-1">
                                            </div>

                                            <div class="account-info">
                                                <div class="account-price uk-flex uk-flex-middle">
                                                    <div class="current-price uk-margin-right">{{ $account['price'] }}
                                                    </div>
                                                    <div class="original-price">{{ $account['original_price'] }}</div>
                                                </div>

                                                <div class="account-description">
                                                    {{ $account['description'] }}
                                                    @if (strpos($account['description'], '12,000') !== false)
                                                        <span class="highlight-amount">12,000</span>
                                                    @endif
                                                </div>

                                                <div class="account-actions">
                                                    <a href="#" class="check-info-btn">KIỂM TRA THÔNG TIN</a>
                                                </div>
                                            </div>
                                            <button class="buy-now-btn">MUA NGAY</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="why-choose-section">
            <div class="uk-container uk-container-center">
                <h2 class="uk-text-center uk-text-bold uk-margin-bottom section-title">TẠI SAO NÊN CHỌN CHÚNG TÔI</h2>
                <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                    <div class="uk-width-medium-1-3">
                        <div class="uk-panel uk-panel-box uk-text-center feature-card">
                            <div class="uk-margin-bottom">
                                <i class="fa-solid fa-gauge-high feature-icon"></i>
                            </div>
                            <h3 class="uk-margin-small-bottom uk-text-bold">Nạp Thẻ Nhanh Chóng</h3>
                            <p class="uk-text-muted uk-margin-small-bottom">Thời gian xử lý chỉ từ 10-30 giây</p>
                            <p class="uk-text-success uk-text-bold">99.9% Giao Dịch Thành Công</p>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-3">
                        <div class="uk-panel uk-panel-box uk-text-center feature-card">
                            <div class="uk-margin-bottom">
                                <i class="fa-solid fa-shield-halved feature-icon feature-icon-green"></i>
                            </div>
                            <h3 class="uk-margin-small-bottom uk-text-bold">An Toàn Tuyệt Đối</h3>
                            <p class="uk-text-muted uk-margin-small-bottom">Bảo mật thông tin người dùng</p>
                            <p class="uk-text-success uk-text-bold">Mã Hóa 256-bit</p>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-3">
                        <div class="uk-panel uk-panel-box uk-text-center feature-card">
                            <div class="uk-margin-bottom">
                                <i class="fa-solid fa-headset feature-icon feature-icon-purple"></i>
                            </div>
                            <h3 class="uk-margin-small-bottom uk-text-bold">Hỗ Trợ 24/7</h3>
                            <p class="uk-text-muted uk-margin-small-bottom">Đội ngũ chăm sóc khách hàng chuyên nghiệp</p>
                            <p class="uk-text-success uk-text-bold">Phản Hồi Trong 5 Phút</p>
                        </div>
                    </div>
                </div>

                <div class="uk-container uk-container-center uk-margin">
                    <div class="uk-flex uk-flex-between uk-flex-middle analytic">
                        <div class="stats-item uk-flex uk-flex-column uk-flex-middle uk-flex-center">
                            <div class="stat-number uk-text-primary uk-text-bold">+8000</div>
                            <div class="uk-text-muted uk-margin-top">Giao Dịch Hàng Tháng</div>
                        </div>
                        <div class="stats-item uk-flex uk-flex-column uk-flex-middle uk-flex-center">
                            <div class="stat-number uk-text-primary uk-text-bold">100%</div>
                            <div class="uk-text-muted uk-margin-top">Độ Tin Cậy</div>
                        </div>
                        <div class="stats-item uk-flex uk-flex-column uk-flex-middle uk-flex-center">
                            <div class="stat-number uk-text-primary uk-text-bold">5%</div>
                            <div class="uk-text-muted uk-margin-top">Chiết Khấu Bonus</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="news-section">
            <div class="uk-container uk-container-center">
                <h2 class="uk-text-center uk-text-bold section-title uk-margin-bottom">TIN TỨC</h2>
                <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                    @foreach ($posts as $post)
                        <div class="uk-width-medium-1-4">
                            <article class="uk-article news-card">
                                <div class="">
                                    <a href="{{ $post['link'] }}" class="news-content-link uk-display-block">
                                        <div class="news-image uk-margin-bottom">
                                            <img src="{{ $post['image'] }}" alt="{{ $post['overlay'] }}"
                                                class="uk-width-1-1">
                                            <div class="news-overlay">{{ $post['overlay'] }}</div>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-date uk-text-small uk-text-success uk-margin-small-bottom">
                                                {{ $post['date'] }}</div>
                                            <h3 class="news-title uk-text-bold uk-margin-small-bottom">
                                                {{ $post['title'] }}</h3>
                                            <p class="news-excerpt uk-text-small uk-text-muted">{{ $post['excerpt'] }}</p>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


    </div>
@endsection
