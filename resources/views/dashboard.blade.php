@extends('layouts.app')

@section('content')
    @guest
        <span class="alert alert-danger mt-4" style="justify-content: center">您尚未登入，請先登入才能看到內容</span>
    @else
        <html>

        <head>
            <meta charset="UTF-8">
            <title>Hello</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
            <!-- <link href="{{ asset('css/css.css') }}" rel="stylesheet"> -->
        </head>


        <body>

            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/k5IcoJB.gif') }}" height="80" width="80" alt="logo">
                        <img src="{{ asset('images/vOez3W.gif') }}" height="80" width="80" alt="logo">
                        <img src="{{ asset('images/f78a1707b4b1ec035a99e91c8df2f1cf.gif') }}" height="80" width="80" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/') }}">首頁</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="member.html">成員</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="meme.html">迷因</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="LiveStreaming.html">預定直播</a>
                            </li>
                        </ul>

                    </div>
                </nav>

                <div class="alert alert-danger mt-4" role="alert">
                    <div id="test1" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#test1" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#test1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#test1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#test1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#test1" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="5000">
                                <img src="{{ asset('static/kiara/banner.jpg') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>小鳥遊 琪亞拉</h5>
                                    <p> Takanashi Kiara
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="{{ asset('static/calli/banner.jpg') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>森美聲</h5>
                                    <p> Mori Calliope
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="{{ asset('static/gura/banner.jpg') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>噶嗚·古拉</h5>
                                    <p> Gawr Gura
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('static/ame/banner.jpg') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>華生·艾米莉亞</h5>
                                    <p> Watson Amelia
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="1000">
                                <img src="{{ asset('static/ina/banner.jpg') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>一伊 那尔栖</h5>
                                    <p> Ninomae Ina'nis
                                    </p>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#test1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">上一個</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#test1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">下一個</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- <h2>
                    <img src="images/vOez3W.gif" height="600" width="600" alt="logo"><img src="images/vOez3W.gif" height="600" width="600" alt="logo">
                </h2>  -->
                <h1 class="mt-5 text-center">
                    哭啊
                </h1>
                <h5 class="mt-2 mb-4 text-center">
                    真哭
                </h5>

                <div class="row justify-content-center">
                    <div class="card col-xl-2 col-sm-3 m-1">
                        <img src="{{ asset('static/clip_channel/Cinderella.jpg') }}" class="card-img-top rounded-circle" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-danger">
                                <i class="bi bi-youtube"></i>
                                <span class="ps-3">
                                    前往頻道
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="card col-xl-2 col-sm-3 m-1">
                        <img src="{{ asset('static/clip_channel/單推的DD烤肉Man.jpg') }}" class="card-img-top rounded-circle" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-danger">
                                <i class="bi bi-youtube"></i>
                                <span class="ps-3">
                                    前往頻道
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="card col-xl-2 col-sm-3 m-1">
                        <img src="{{ asset('static/clip_channel/殭屍單推人.jpg') }}" class="card-img-top rounded-circle" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-danger">
                                <i class="bi bi-youtube"></i>
                                <span class="ps-3">
                                    前往頻道
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="card col-xl-2 col-sm-3 m-1">
                        <img src="{{ asset('static/clip_channel/鯊魚愛吃的鳳梨蝦球.jpg') }}" class="card-img-top rounded-circle" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="btn btn-danger">
                                <i class="bi bi-youtube"></i>
                                <span class="ps-3">
                                    前往頻道
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <h3 class="text-center my-2">
                    粉絲推文
                </h3>
                <div class="column">
                    <div class="row">
                        <div class="col my-1">
                            <blockquote class="twitter-tweet">
                                <p lang="eu" dir="ltr">Gura🔱🦈<a
                                        href="https://twitter.com/hashtag/gawrt?src=hash&amp;ref_src=twsrc%5Etfw">#gawrt</a> <a
                                        href="https://twitter.com/hashtag/GURAPARTY?src=hash&amp;ref_src=twsrc%5Etfw">#GURAPARTY</a>
                                    <a href="https://t.co/dtAMBpTiH4">pic.twitter.com/dtAMBpTiH4</a></p>&mdash; せぼねーこ
                                (@backbonecat) <a
                                    href="https://twitter.com/backbonecat/status/1472169687383687168?ref_src=twsrc%5Etfw">December
                                    18, 2021</a>
                            </blockquote>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div class="col">
                            <blockquote class="twitter-tweet">
                                <p lang="ja" dir="ltr">消えてしまったので再掲載❕<a
                                        href="https://twitter.com/hashtag/artsofashes?src=hash&amp;ref_src=twsrc%5Etfw">#artsofashes</a>
                                    <a
                                        href="https://twitter.com/hashtag/%E7%B5%B5%E3%83%8B%E3%83%83%E3%82%AF%E3%82%B9?src=hash&amp;ref_src=twsrc%5Etfw">#絵ニックス</a>
                                    <a href="https://t.co/V1iihd7cm8">pic.twitter.com/V1iihd7cm8</a></p>&mdash; 雨虎☔️ (@axlxsia)
                                <a href="https://twitter.com/axlxsia/status/1472029801339035650?ref_src=twsrc%5Etfw">December
                                    18, 2021</a> 
                            </blockquote>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div class="col my-1">
                            <blockquote class="twitter-tweet">
                                <p lang="und" dir="ltr">🔱💙💙💙<a
                                        href="https://twitter.com/hashtag/GURAPARTY?src=hash&amp;ref_src=twsrc%5Etfw">#GURAPARTY</a>
                                    <a href="https://twitter.com/hashtag/gawrt?src=hash&amp;ref_src=twsrc%5Etfw">#gawrt</a> <a
                                        href="https://t.co/vZnklUJQMO">pic.twitter.com/vZnklUJQMO</a></p>&mdash; MACHI馬吉
                                (@Machi7769) <a
                                    href="https://twitter.com/Machi7769/status/1470427813656543232?ref_src=twsrc%5Etfw">December
                                    13, 2021</a>
                            </blockquote>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div class="col my-1">
                            <blockquote class="twitter-tweet">
                                <p lang="pt" dir="ltr">SEISO <a
                                        href="https://twitter.com/hashtag/artsofashes?src=hash&amp;ref_src=twsrc%5Etfw">#artsofashes</a>
                                    <a
                                        href="https://twitter.com/hashtag/%E7%B5%B5%E3%83%8B%E3%83%83%E3%82%AF%E3%82%B9?src=hash&amp;ref_src=twsrc%5Etfw">#絵ニックス</a>
                                    <a href="https://t.co/vPZ9n5HNFn">pic.twitter.com/vPZ9n5HNFn</a></p>&mdash; InApple
                                (@inapple84) <a
                                    href="https://twitter.com/inapple84/status/1471064435863465986?ref_src=twsrc%5Etfw">December
                                    15, 2021</a>
                            </blockquote>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
                <div id="test2" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#test2" data-bs-slide-to="0" class="active" aria-current="true"
                            aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#test2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#test2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#test2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#test2" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <div class="card col-xl-2 col-sm-3 m-1">
                                <img src="{{ asset('static/clip_channel/單推的DD烤肉Man.jpg') }}" class="card-img-top rounded-circle" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-danger">
                                        <i class="bi bi-youtube"></i>
                                        <span class="ps-3">
                                            前往頻道
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">

                        </div>
                        <div class="carousel-item" data-bs-interval="3000">

                        </div>
                        <div class="carousel-item" data-bs-interval="2000">

                        </div>
                        <div class="carousel-item" data-bs-interval="1000">

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#test2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">上一個</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#test2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">下一個</span>
                    </button>
                </div>
            </div>
            </div>

        </body>

        </html>
    @endguest
@endsection
