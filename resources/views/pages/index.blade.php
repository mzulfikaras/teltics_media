@extends('master')

@section('content')
    <div class="container">
        <div class="content">
            <p>
                Bali United Football Club is an Indonesian professional club based in Gianyar, Bali.
                Bali United began operations in 2014 and continues to be of the highest tier in the Indonesian football
                competition, League 1.
                The club has a vision to grow the football industry in Indonesia through creating an ecosystem consiting of
                4Cs namely the Club, Community, Corporation, and Country.
                <span class="hex-red-text">Staying true to this vision, </span>the football club launched a sports agency
                under name United Creative, to always bring the <span class="hex-red-text">GAME ON</span> beyond its own
                club.
            </p>

            <div class="regrads">
                <p>Warm regards,</p>
                <img src="{{ asset('assets/images/v502_1719.png') }}" alt="">
            </div>
        </div>
        <hr>
        <div class="product">
            <div class="row row-header">
                <div class="col-6">
                    <h2>Products</h2>
                    <p class="hex-red-text">What we can do for you</p>
                </div>
                <div class="col-6 button-view">
                    <button type="button" class="btn btn-outline-danger">View All</button>
                </div>
            </div>

            <div class="row" id="card-body-product">

            </div>
        </div>
        <hr>
        <div class="wmud">
            <h1>WHAT MAKE US DIFFERENT</h1>
            <div id="wmud-carosel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#wmud-carosel" data-slide-to="0" class="indicator active"></li>
                    <li data-target="#wmud-carosel" data-slide-to="1" class="indicator">></li>
                    <li data-target="#wmud-carosel" data-slide-to="2" class="indicator">></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item carousel-item-wmud active">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{ asset('assets/images/v502_1483.png') }}" class="d-block" alt="...">
                            </div>
                            <div class="col-6">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At alias quo, voluptatibus porro
                                    voluptatum voluptates dolor debitis inventore blanditiis provident est nulla! Fugiat
                                    ullam repellat ut reiciendis, explicabo non et?</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-item-wmud">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{ asset('assets/images/v502_1483.png') }}" class="d-block" alt="...">
                            </div>
                            <div class="col-6">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At alias quo, voluptatibus porro
                                    voluptatum voluptates dolor debitis inventore blanditiis provident est nulla! Fugiat
                                    ullam repellat ut reiciendis, explicabo non et?</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-item-wmud">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{ asset('assets/images/v502_1483.png') }}" class="d-block" alt="...">
                            </div>
                            <div class="col-6">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At alias quo, voluptatibus porro
                                    voluptatum voluptates dolor debitis inventore blanditiis provident est nulla! Fugiat
                                    ullam repellat ut reiciendis, explicabo non et?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#wmud-carosel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#wmud-carosel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <hr>
        <div class="service">
            <div class="row row-header">
                <div class="col-6">
                    <h2>Services</h2>
                    <p class="hex-red-text">What we can do for you</p>
                </div>
                <div class="col-6 button-view">
                    <button type="button" class="btn btn-outline-danger">View All</button>
                </div>
            </div>
            <div class="row" id="card-body-service">

            </div>
        </div>
        <hr>
        <div class="works">
            <h1>Our Works</h1>
            <div id="work-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators work-indicator">
                    <li data-target="#work-carousel" data-slide-to="0" class="indicator active"></li>
                    <li data-target="#work-carousel" data-slide-to="1" class="indicator"></li>
                    <li data-target="#work-carousel" data-slide-to="2" class="indicator"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('assets/images/v691_2366.png') }}" class="d-block" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/images/v691_2372.png') }}" class="d-block" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/images/v733_1558.png') }}" class="d-block" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('assets/images/v691_2366.png') }}" class="d-block" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/images/v691_2372.png') }}" class="d-block" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/images/v733_1558.png') }}" class="d-block" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('assets/images/v691_2366.png') }}" class="d-block" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/images/v691_2372.png') }}" class="d-block" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/images/v733_1558.png') }}" class="d-block" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#work-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#work-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <hr>
        <div class="client">
            <div class="row row-header">
                <div class="col-6">
                    <h2>Products</h2>
                    <p class="hex-red-text">What we can do for you</p>
                </div>
                <div class="col-6 button-view">
                    <button type="button" class="btn btn-outline-danger">View All</button>
                </div>
            </div>

            <div id="client-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators client-indicator">
                    <li data-target="#client-carousel" data-slide-to="0" class="indicator active"></li>
                    <li data-target="#client-carousel" data-slide-to="1" class="indicator"></li>
                    <li data-target="#client-carousel" data-slide-to="2" class="indicator"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_742.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_749.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_744.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_745.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_746.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_747.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_748.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_751.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_753.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_754.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_756.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_757.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_759.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_761.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_751.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_753.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_754.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_756.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_757.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_759.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_761.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_742.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_749.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_744.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_745.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_746.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_747.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_748.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_751.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_753.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_754.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_756.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_757.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_759.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_761.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_751.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_753.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_754.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_756.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_757.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_759.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_761.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_742.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_749.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_744.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_745.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_746.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_747.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_748.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_751.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_753.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_754.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_756.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_757.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_759.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_761.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_751.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_753.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_754.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_756.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_757.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_759.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="col-2" style="max-width: 13.666667%!important">
                                <img src="{{ asset('assets/images/v502_761.png') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#client-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#client-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="creative-project">
            <p class="text-creative">
                Let's Create
                <span class="creative-animate">Creative Project</span>
            </p>
            <button type="button" class="btn btn-outline-danger">Start Project With Us</button>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            var urlProduct = "http://localhost:8000/api/product";
            var urlService = "http://localhost:8000/api/service"

            $.ajax({
                type: "GET",
                url: urlProduct,
                success: function(res) {
                    var cardProduct = $('#card-body-product')
                    $.each(res.data, function(i, data) {
                        cardProduct.append(
                            `<div class="col-4">
                                <div class="card card-product" style="margin-bottom: 2rem; width: 22rem; height: 13rem; background-color:` +data.color+ `">
                                    <div class="card-body">
                                        <img src="`+data.images+`" alt="image produk">
                                        <p class="card-text">` + data.name + `</p>
                                    </div>
                                </div>
                            </div>`
                        )
                    })
                }
            });

            $.ajax({
                type: "GET",
                url: urlService,
                success: function(res) {
                    console.log(res);
                    var cardService = $('#card-body-service')
                    $.each(res.data, function(i, data) {
                        cardService.append(
                            `<div class="col-4">
                                <div class="card" style="margin-bottom: 2rem; width: 22rem; height: 13rem;">
                                    <img class="card-img" src="`+data.images+`" alt="Card image">
                                    <div class="card-img-overlay">
                                        <p class="card-text">` + data.name + `</p>
                                    </div>
                                </div>
                            </div>`
                        )
                    })
                }
            });
        });
    </script>
@endsection
