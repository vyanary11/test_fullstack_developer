@extends('app')
@section('content')
    <main role="main">
        <div class="container">
            <div class="row feature">
                <div class="col-md-6">
                    <h2 class="heading">PHP Hosting</h2>
                    <h2 class="text-muted">Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h2>
                    <ul class="list-unstyled mt-3">
                        <li class="text-muted"><i class="fas fa-check-circle text-success"></i> Solusi PHP untuk performa query yang lebih cepat.</li>
                        <li class="text-muted"><i class="fas fa-check-circle text-success"></i> Konsumsi memori yang lebih rendah.</li>
                        <li class="text-muted"><i class="fas fa-check-circle text-success"></i> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
                        <li class="text-muted"><i class="fas fa-check-circle text-success"></i> Fitur enkripsi IonCube dan Zend Guard Loaders</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img class="bd-placeholder-img bd-placeholder-img-lg img-fluid mx-auto" src="{{ asset("assets/svg/illustration banner PHP hosting-01.svg") }}" alt="">
                </div>
            </div>
        </div>

        <hr class="divider">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 text-center">
                    <div class="icon-marketing row align-items-center">
                        <div class="col">
                            <img src="{{ asset("assets/images/icon PHP Hosting_zendguard.png") }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <p>PHP Zend Guard Loader</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon-marketing row align-items-center">
                        <div class="col">
                            <img src="{{ asset("assets/images/icon PHP Hosting_composer.png") }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <p>PHP Composer</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon-marketing row align-items-center">
                        <div class="col">
                            <img src="{{ asset("assets/images/icon PHP Hosting_ioncube.png") }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <p>PHP ionCube Loader</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 text-center">
                    <h2 class="heading">Paket Hosting Singapura yang tepat</h2>
                    <h3 class="text-muted">Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
                </div>
            </div>

            <div class="row justify-content-center mt-3 no-gutters">
                @foreach ($data_products as $product)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card text-center @if($product->type=="best_seller") border-primary @endif">
                            @if ($product->type=="best_seller")
                                <div class="ribbon"><span>Best Seller</span></div>
                            @endif
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item heading @if($product->type=="best_seller") bg-primary text-white @endif">
                                    <h2 class="heading">{{ $product->name }}</h2>
                                </li>
                                <li class="list-group-item @if($product->type=="best_seller") bg-primary text-white @endif">
                                    <del>Rp. {{ str_replace(",",".",number_format($product->price_discount)) }}</del></br>
                                    @php
                                        $price = number_format($product->price_discount);
                                        $price_split = explode(",", $price);
                                    @endphp
                                    Rp <b style="font-size: 30px;">{{ $price_split[0] }}</b>
                                    <span class="align-top">
                                        <b>
                                            @for ($i = 1; $i < count($price_split); $i++)
                                            .{{ $price_split[$i] }}
                                            @endfor
                                        </b>/bln
                                    </span>
                                </li>
                                <li class="list-group-item @if($product->type=="best_seller") bg-primary text-white @endif"><strong>{{ str_replace(",",".",number_format($product->number_of_users)) }}</strong> Pengguna Terdaftar</li>
                                <li class="list-group-item">
                                    <ul class="list-unstyled">
                                        @foreach ($product->product_descriptions as $product_description)
                                            <li>{!! $product_description->description !!}</li>
                                        @endforeach
                                    </ul>
                                    <button class="mt-5 mb-4 btn @if($product->type=="best_seller") btn-primary @else btn-outline-dark @endif rounded-pill">{{ $product->button_text }}</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-12 mb-3 text-center">
                    <h2 class="text-muted">Powerful dengan Limit PHP yang Lebih Besar</h2>
                </div>
                <div class="col-lg-4 col-12">
                    <table class="table table-striped border">
                        <tbody>
                            <tr>
                                <th><i class="fas fa-check-circle text-success"></th>
                                <td class="text-center">max execution time 300s</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-check-circle text-success"></th>
                                <td class="text-center">max execution time 300s</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-check-circle text-success"></th>
                                <td class="text-center">max execution time 300s</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-check-circle text-success"></th>
                                <td class="text-center">max execution time 300s</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4 col-12">
                    <table class="table table-striped border">
                        <tbody>
                            <tr>
                                <th><i class="fas fa-check-circle text-success"></th>
                                <td class="text-center">max execution time 300s</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-check-circle text-success"></th>
                                <td class="text-center">max execution time 300s</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-check-circle text-success"></th>
                                <td class="text-center">max execution time 300s</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-check-circle text-success"></th>
                                <td class="text-center">max execution time 300s</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row justify-content-start text-center mt-5">
                <div class="col-12 mb-4 text-center">
                    <h2 class="text-muted">Semua Paket Hosting Sudah Termasuk</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-5 pb-5">
                    <img width="50" src="{{ asset("assets/svg/icon PHP Hosting_PHP Semua Versi.svg") }}">
                    <h5 class="font-weight-bold mt-3">PHP Semua Versi</h5>
                    <p class="text-muted">
                        Pilih mulai dari versi PHP 5.3 s/d PHP 7 Ubah sesuka Anda!
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-5 pb-5">
                    <img width="50" src="{{ asset("assets/svg/icon PHP Hosting_My SQL.svg") }}">
                    <h5 class="font-weight-bold mt-3">MySQL Versi 5.6</h5>
                    <p class="text-muted">
                        Nikmati MySQL versi terbaru tercepat dan kaya akan fitur.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-5 pb-5">
                    <img width="50" src="{{ asset("assets/svg/icon PHP Hosting_CPanel.svg") }}">
                    <h5 class="font-weight-bold mt-3">Panel Hosting cPanel</h5>
                    <p class="text-muted">
                        Kelola website dengan panel canggih yang familiar di hati Anda.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-5 pb-5">
                    <img width="50" src="{{ asset("assets/svg/icon PHP Hosting_garansi uptime.svg") }}">
                    <h5 class="font-weight-bold mt-3">Garansi Uptime 99.9%</h5>
                    <p class="text-muted">
                        Data center yang mendukung kelangsungan website Anda 24/7.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-5 pb-5">
                    <img width="50" src="{{ asset("assets/svg/icon PHP Hosting_InnoDB.svg") }}">
                    <h5 class="font-weight-bold mt-3">Database InnoDB Unlimited</h5>
                    <p class="text-muted">
                        Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-12 px-5 pb-5">
                    <img width="50" src="{{ asset("assets/svg/icon PHP Hosting_My SQL remote.svg") }}">
                    <h5 class="font-weight-bold mt-3">Wildcard Remote MySQL</h5>
                    <p class="text-muted">
                        Mendukung s/d 25 max_user_connections dan 100 max_connectnions.
                    </p>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="row feature">
                <div class="col-12 mb-4 text-center">
                    <h2 class="text-muted">Mendukung Penuh Framework Laravel</h2>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled mt-3">
                        <li class="text-muted"><p>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</p></li>
                        <li class="text-muted"><i class="fas fa-check-circle text-success"></i> Solusi PHP untuk performa query yang lebih cepat.</li>
                        <li class="text-muted"><i class="fas fa-check-circle text-success"></i> Konsumsi memori yang lebih rendah.</li>
                        <li class="text-muted"><i class="fas fa-check-circle text-success"></i> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
                        <li class="text-muted"><p>Nb Composer dan SSH hanya tersedia pada paket Personal dan Bisnis.</p></li>
                    </ul>

                </div>
                <div class="col-md-6">
                    <img class="bd-placeholder-img bd-placeholder-img-lg img-fluid mx-auto" src="{{ asset("assets/svg/illustration banner support laravel hosting.svg") }}" alt="">
                </div>
            </div>
        </div>

        <hr class="devider">

        <div class="container">
            <div class="row justify-content-center mt-5 text-muted">
                <div class="col-12 mb-4 text-center">
                    <h2>Modul Lengkap untuk Menjalakan Aplikasi Anda.</h2>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <ul class="list-unstyled">
                        <li>IcePHP</li>
                        <li>apc</li>
                        <li>apcu</li>
                        <li>apm</li>
                        <li>ares</li>
                        <li>bcmath</li>
                        <li>bcompiler</li>
                        <li>big_int</li>
                        <li>bitset</li>
                        <li>bloomy</li>
                        <li>bz2_filter</li>
                        <li>clamav</li>
                        <li>coin_acceptor</li>
                        <li>crack</li>
                        <li>dba</li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <ul class="list-unstyled">
                        <li>http</li>
                        <li>huffman</li>
                        <li>idn</li>
                        <li>igbinary</li>
                        <li>imagick</li>
                        <li>imap</li>
                        <li>inclued </li>
                        <li>inotify</li>
                        <li>interbase</li>
                        <li>inti</li>
                        <li>ioncube_loader</li>
                        <li>ioncube_loader_4</li>
                        <li>Ismin</li>
                        <li>json</li>
                        <li>Idap</li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <ul class="list-unstyled">
                        <li>nd_pdo_mysql</li>
                        <li>oauth</li>
                        <li>осів</li>
                        <li>odbc</li>
                        <li>opcache</li>
                        <li>pdf</li>
                        <li>pdo</li>
                        <li>pdo_dblib</li>
                        <li>pdo_firebird</li>
                        <li>pdo_mysql</li>
                        <li>pdo_odbc</li>
                        <li>pdo_pgsql</li>
                        <li>pdo_sqlite</li>
                        <li>posal</li>
                        <li>phalcon</li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <ul class="list-unstyled">
                        <li>stats</li>
                        <li>stem </li>
                        <li>stomp</li>
                        <li>suhosin</li>
                        <li>sybase_ct</li>
                        <li>sysvmsg</li>
                        <li>sysvsem</li>
                        <li>sysvshm</li>
                        <li>tidy</li>
                        <li>timezonedb</li>
                        <li>trader</li>
                        <li>translate</li>
                        <li>uploadprogress</li>
                        <li>uri_template</li>
                        <li>uud</li>
                    </ul>
                </div>
                <div class="col-12 text-center mt-4">
                    <button class="btn btn-outline-dark rounded-pill">Selengkapnya</button>
                </div>
            </div>

            <div class="row feature mt-5">
                <div class="col-md-6">
                    <h2 class="text-muted mb-3">Linux Hosting yang Stabil dengan Teknologi LVE</h2>
                    <p class="text-muted">
                        SuperMicro <strong> Intel Xeon 24-Cores </strong> server dengan RAM <strong>128</strong> GB dan teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi dengan <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching. Apache load balancer berbasis LiteSpeed Technologies <strong>CageFS</strong> security, <strong>Raid-10</strong> protection dan auto backup untuk keamanan website PHP Anda
                    </p>
                    <button class="mt-3 btn btn-primary rounded-pill">Pilih Hosting Anda</button>
                </div>
                <div class="col-md-6 pt-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg img-fluid mx-auto" src="{{ asset("assets/images/Image support.png") }}" alt="">
                </div>
            </div>
        </div>
        <div class="bg-light py-3">
            <div class="container clearfix">
                <div class="float-left">
                    Bagikan jika Anda mmenyukai halaman ini.
                </div>
                <div class="float-right">
                    <ul class="nav ml-auto">
                        <li class="nav-item mr-2">
                            <a class="btn btn-primary rounded" href="#"><i class="fab fa-facebook-f"></i></a> <span class="p-2 text-muted rounded" style="border: 1px solid #6c757d;">80k</span>
                        </li>
                        <li class="nav-item mr-2">
                            <a class="btn btn-info rounded" href="#"><i class="fab fa-twitter"></i></a> <span class="p-2 text-muted rounded" style="border: 1px solid #6c757d;">450</span>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger rounded" href="#"><i class="fab fa-google-plus-g"></i></a> <span class="p-2 text-muted rounded" style="border: 1px solid #6c757d;">1900</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-primary py-5">
            <div class="container clearfix">
                <div class="float-left">
                    <p class="text-white" style="font-size: 30px;">Perlu <Strong>BANTUAN?</Strong> Hubungi Kami: <strong>0274-5305505</strong></p>
                </div>
                <div class="float-left d-lg-block d-none border-right ml-5" style="font-size: 30px;">
                    &nbsp;
                </div>
                <div class="float-lg-right float-left">
                    <button class="ml-auto btn btn-lg btn-outline-light rounded-pill"><i class="fas fa-comment-alt"></i> Live Chat</button>
                </div>
            </div>
        </div>

    </main>
@endsection

