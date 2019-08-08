@extends ("layouts.master")

@section ("content")

<div id="slider_wrapper">
        <div class="container">
            <div id="slider_inner">
                <div class="">
                    <div id="slider">

                        <div class="">
                            <div class="carousel-box">
                                <div class="inner">
                                    <div class="carousel main">
                                        <ul>
                                            <li>
                                                <div class="slider">
                                                    <div class="slider_inner">
                                                        <div class="txt1"><span>Welcome To Our</span></div>
                                                        <div class="txt2"><span>TRAVEL AGENCY</span></div>
                                                        <div class="txt3"><span>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slider">
                                                    <div class="slider_inner">
                                                        <div class="txt1"><span>7 - Day Tour</span></div>
                                                        <div class="txt2"><span>AMAZING CARIBBEAN</span></div>
                                                        <div class="txt3"><span>Lorem ipsum dolor eleifend option congue nihil imperdiet doming id quod.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slider">
                                                    <div class="slider_inner">
                                                        <div class="txt1"><span>5 Days In</span></div>
                                                        <div class="txt2"><span>PARIS (Capital Of World)</span></div>
                                                        <div class="txt3"><span>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="slider">
                                                    <div class="slider_inner">
                                                        <div class="txt1"><span>12 - Day Cruises</span></div>
                                                        <div class="txt2"><span>FROM GREECE TO SPAIN</span></div>
                                                        <div class="txt3"><span>MEDITERRANEAN - 12 - Day Cruises By "GRAND VICTORIA III" Cruise Liner.</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider_pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="front_tabs">
        <div class="container">
            <div class="tabs_wrapper tabs1_wrapper">
                <div class="tabs tabs1">
                    <div class="tabs_tabs tabs1_tabs">

                        <ul>
                            <li class="active flights"><a href="#tabs-1" style="font-size: 18px">Туры</a></li>
                            <li class="hotels"><a href="#tabs-2"  style="font-size: 18px">Отели</a></li>
                            

                            <li class="cruises"><a href="#tabs-4"  style="font-size: 18px">Круизы</a></li>
                        </ul>

                    </div>
                    <div class="tabs_content tabs1_content">

                        <div id="tabs-1">
                            <form action="javascript:;" class="form1">
                                <div class="row">
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>Вылет из:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">City or Airport</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>Куда:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">City or Airport</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>День вылета:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>День прилета:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-1">
                                        <div class="select1_wrapper">
                                            <label>Взрослые:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select select3" style="width: 100%">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-1">
                                        <div class="select1_wrapper">
                                            <label>Дети:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select select3" style="width: 100%">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="button1_wrapper">
                                            <button type="submit" class="btn-default btn-form1-submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="tabs-2">
                            <form action="javascript:;" class="form1">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="select1_wrapper">
                                            <label>Город или отель:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Enter a destination or hotel name</option>
                                                    <option value="2">Lorem ipsum dolor sit amet</option>
                                                    <option value="3">Duis autem vel eum</option>
                                                    <option value="4">Ut wisi enim ad minim veniam</option>
                                                    <option value="5">Nam liber tempor cum</option>
                                                    <option value="6">At vero eos et accusam et</option>
                                                    <option value="7">Consetetur sadipscing elitr</option>
                                                    <option value="8">Sed diam nonumy</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>1-день отеля:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>Последний день:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="Mm/Dd/Yy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>Взрослых:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">Room for 1 adult</option>
                                                    <option value="2">Room for 2 adult</option>
                                                    <option value="3">Room for 3 adult</option>
                                                    <option value="4">Room for 4 adult</option>
                                                    <option value="5">Room for 5 adult</option>
                                                    <option value="6">Room for 6 adult</option>
                                                    <option value="7">Room for 7 adult</option>
                                                    <option value="8">Room for 8 adult</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="button1_wrapper">
                                            <button type="submit" class="btn-default btn-form1-submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="tabs-4">
                            <form action="javascript:;" class="form1">
                                <div class="row">
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>Плыть до:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">All destinations</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>Плыть из:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">All ports</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>Начало круиза:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="From any month">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="input1_wrapper">
                                            <label>Конец круиза:</label>
                                            <div class="input1_inner">
                                                <input type="text" class="input datepicker" value="To any month">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2">
                                        <div class="select1_wrapper">
                                            <label>Круизный корабль:</label>
                                            <div class="select1_inner">
                                                <select class="select2 select" style="width: 100%">
                                                    <option value="1">All Ships</option>
                                                    <option value="2">Alaska</option>
                                                    <option value="3">Bahamas</option>
                                                    <option value="4">Bermuda</option>
                                                    <option value="5">Canada</option>
                                                    <option value="6">Caribbean</option>
                                                    <option value="7">Europe</option>
                                                    <option value="8">Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-4 col-md-2">
                                        <div class="button1_wrapper">
                                            <button type="submit" class="btn-default btn-form1-submit">Найти</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="why1">
        <div class="container">

            <h2 class="animated">Наши преимущества</h2>

            <div class="title1 animated">
            </div>

            <br><br>

            <div class="row">
                <div class="col-sm-3">
                    <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="200">
                        <div class="thumbnail clearfix">
                            <a href="#">
                                <figure class="">
                                    <img src="images/why1.png" alt="" class="img1 img-responsive">
                                    <img src="images/why1_hover.png" alt="" class="img2 img-responsive">
                                </figure>
                                <div class="caption">
                                    <div class="txt1">Удивительные путешествия</div>
                                    <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                        imperdiet doming id quod mazim.
                                    </div>
                                    <div class="txt3">Узнать подробнее</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="300">
                        <div class="thumbnail clearfix">
                            <a href="#">
                                <figure class="">
                                    <img src="images/why2.png" alt="" class="img1 img-responsive">
                                    <img src="images/why2_hover.png" alt="" class="img2 img-responsive">
                                </figure>
                                <div class="caption">
                                    <div class="txt1">Узнавайте новое</div>
                                    <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                        imperdiet doming id quod mazim.
                                    </div>
                                    <div class="txt3">Узнать подробнее</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="400">
                        <div class="thumbnail clearfix">
                            <a href="#">
                                <figure class="">
                                    <img src="images/why3.png" alt="" class="img1 img-responsive">
                                    <img src="images/why3_hover.png" alt="" class="img2 img-responsive">
                                </figure>
                                <div class="caption">
                                    <div class="txt1">Сделайте свой тур</div>
                                    <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                        imperdiet doming id quod mazim.
                                    </div>
                                    <div class="txt3">Узнать подробнее</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="500">
                        <div class="thumbnail clearfix">
                            <a href="#">
                                <figure class="">
                                    <img src="images/why4.png" alt="" class="img1 img-responsive">
                                    <img src="images/why4_hover.png" alt="" class="img2 img-responsive">
                                </figure>
                                <div class="caption">
                                    <div class="txt1">Отличная поддержка</div>
                                    <div class="txt2">Nam liber tempor cum soluta nobis eleifend option congue nihil
                                        imperdiet doming id quod mazim.
                                    </div>
                                    <div class="txt3">Узнать подробнее</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="parallax1" class="parallax">
        <div class="bg1 parallax-bg"></div>
        <div class="overlay"></div>
        <div class="parallax-content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-10 animated">
                        <div class="txt1">Специальное предложение</div>
                        <div class="txt2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                            veniam, quis nostrud exerci tation ullamcorper.
                        </div>
                        <div class="txt3">From: Khazbegi (Goergia) <strong>$159.00</strong><span>person</span></div>
                    </div>
                    <div class="col-sm-2">
                        <a href="#" class="btn-default btn0">Details</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="popular_cruises1">
        <div class="container">

            <h2 class="animated">Популярные круизы</h2>

            <div class="title1 animated">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod <br>tincidunt ut laoreet dolore magna aliquam erat volutpat.
            </div>

            <br><br>

            <div id="popular_wrapper" class="animated" data-animation="fadeIn" data-animation-delay="300">
                <div id="popular_inner">
                    <div class="">
                        <div id="popular">
                            <div class="">
                                <div class="carousel-box">
                                    <div class="inner">
                                        <div class="carousel main">
                                            <ul>
                                                <li>
                                                    <div class="popular">
                                                        <div class="popular_inner">
                                                            <figure>
                                                                <img src="http://placehold.it/370x232" alt=""
                                                                     class="img-responsive">
                                                                <div class="over">
                                                                    <div class="v1">Bahamas <span>17 Deal Offers</span>
                                                                    </div>
                                                                    <div class="v2">Lorem ipsum dolor sit amet,
                                                                        concateus.
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div class="caption">
                                                                <div class="txt1"><span>Bahamas</span> 7 Night Tour
                                                                </div>
                                                                <div class="txt2">Nam liber tempor cum soluta nobis
                                                                    eleifend option congue nihil imperdiet doming.
                                                                </div>
                                                                <div class="txt3 clearfix">
                                                                    <div class="left_side">
                                                                        <div class="stars1">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star2.png" alt="">
                                                                        </div>
                                                                        <div class="nums">- 18 Reviews</div>
                                                                    </div>
                                                                    <div class="right_side"><a href="#"
                                                                                               class="btn-default btn1">See
                                                                        All</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="popular">
                                                        <div class="popular_inner">
                                                            <figure>
                                                                <img src="http://placehold.it/370x232" alt=""
                                                                     class="img-responsive">
                                                                <div class="over">
                                                                    <div class="v1">Mediterranean
                                                                        <span>17 Deal Offers</span></div>
                                                                    <div class="v2">Lorem ipsum dolor sit amet,
                                                                        concateus.
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div class="caption">
                                                                <div class="txt1"><span>Mediterranean</span> 18 Night
                                                                    Tour
                                                                </div>
                                                                <div class="txt2">Nam liber tempor cum soluta nobis
                                                                    eleifend option congue nihil imperdiet doming.
                                                                </div>
                                                                <div class="txt3 clearfix">
                                                                    <div class="left_side">
                                                                        <div class="stars1">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                        </div>
                                                                        <div class="nums">- 168 Reviews</div>
                                                                    </div>
                                                                    <div class="right_side"><a href="#"
                                                                                               class="btn-default btn1">See
                                                                        All</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="popular">
                                                        <div class="popular_inner">
                                                            <figure>
                                                                <img src="http://placehold.it/370x232" alt=""
                                                                     class="img-responsive">
                                                                <div class="over">
                                                                    <div class="v1">Greece <span>17 Deal Offers</span>
                                                                    </div>
                                                                    <div class="v2">Lorem ipsum dolor sit amet,
                                                                        concateus.
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div class="caption">
                                                                <div class="txt1"><span>Greece</span> 6 Night Tour</div>
                                                                <div class="txt2">Nam liber tempor cum soluta nobis
                                                                    eleifend option congue nihil imperdiet doming.
                                                                </div>
                                                                <div class="txt3 clearfix">
                                                                    <div class="left_side">
                                                                        <div class="stars1">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star2.png" alt="">
                                                                        </div>
                                                                        <div class="nums">- 16 Reviews</div>
                                                                    </div>
                                                                    <div class="right_side"><a href="#"
                                                                                               class="btn-default btn1">See
                                                                        All</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="popular">
                                                        <div class="popular_inner">
                                                            <figure>
                                                                <img src="http://placehold.it/370x232" alt=""
                                                                     class="img-responsive">
                                                                <div class="over">
                                                                    <div class="v1">Bahamas <span>17 Deal Offers</span>
                                                                    </div>
                                                                    <div class="v2">Lorem ipsum dolor sit amet,
                                                                        concateus.
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div class="caption">
                                                                <div class="txt1"><span>Bahamas</span> 7 Night Tour
                                                                </div>
                                                                <div class="txt2">Nam liber tempor cum soluta nobis
                                                                    eleifend option congue nihil imperdiet doming.
                                                                </div>
                                                                <div class="txt3 clearfix">
                                                                    <div class="left_side">
                                                                        <div class="stars1">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star2.png" alt="">
                                                                        </div>
                                                                        <div class="nums">- 18 Reviews</div>
                                                                    </div>
                                                                    <div class="right_side"><a href="#"
                                                                                               class="btn-default btn1">See
                                                                        All</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="popular">
                                                        <div class="popular_inner">
                                                            <figure>
                                                                <img src="http://placehold.it/370x232" alt=""
                                                                     class="img-responsive">
                                                                <div class="over">
                                                                    <div class="v1">Mediterranean
                                                                        <span>17 Deal Offers</span></div>
                                                                    <div class="v2">Lorem ipsum dolor sit amet,
                                                                        concateus.
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div class="caption">
                                                                <div class="txt1"><span>Mediterranean</span> 18 Night
                                                                    Tour
                                                                </div>
                                                                <div class="txt2">Nam liber tempor cum soluta nobis
                                                                    eleifend option congue nihil imperdiet doming.
                                                                </div>
                                                                <div class="txt3 clearfix">
                                                                    <div class="left_side">
                                                                        <div class="stars1">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                        </div>
                                                                        <div class="nums">- 168 Reviews</div>
                                                                    </div>
                                                                    <div class="right_side"><a href="#"
                                                                                               class="btn-default btn1">See
                                                                        All</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="popular">
                                                        <div class="popular_inner">
                                                            <figure>
                                                                <img src="http://placehold.it/370x232" alt=""
                                                                     class="img-responsive">
                                                                <div class="over">
                                                                    <div class="v1">Greece <span>17 Deal Offers</span>
                                                                    </div>
                                                                    <div class="v2">Lorem ipsum dolor sit amet,
                                                                        concateus.
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                            <div class="caption">
                                                                <div class="txt1"><span>Greece</span> 6 Night Tour</div>
                                                                <div class="txt2">Nam liber tempor cum soluta nobis
                                                                    eleifend option congue nihil imperdiet doming.
                                                                </div>
                                                                <div class="txt3 clearfix">
                                                                    <div class="left_side">
                                                                        <div class="stars1">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star1.png" alt="">
                                                                            <img src="images/star2.png" alt="">
                                                                        </div>
                                                                        <div class="nums">- 16 Reviews</div>
                                                                    </div>
                                                                    <div class="right_side"><a href="#"
                                                                                               class="btn-default btn1">See
                                                                        All</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular_pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="sm_slider sm_slider1">
                            <a class="sm_slider_prev" href="#"></a>
                            <a class="sm_slider_next" href="#"></a>
                            <div class="">
                                <div class="carousel-box">
                                    <div class="inner">
                                        <div class="carousel main">
                                            <ul>
                                                <li>
                                                    <div class="sm_slider_inner">
                                                        <div class="txt1">Lorem ipsum dolor sit amet, consectetuer
                                                            adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                                            laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                                            minim veniam.
                                                        </div>
                                                        <div class="txt2">George Smith</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sm_slider_inner">
                                                        <div class="txt1">Lorem ipsum dolor sit amet, consectetuer
                                                            adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                                            laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                                            minim veniam.
                                                        </div>
                                                        <div class="txt2">Adam Parker</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

    <div id="partners">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-2 col-xs-6">
                    <div class="thumb1 animated">
                        <div class="thumbnail clearfix">
                            <a href="#">
                                <figure>
                                    <img src="http://placehold.it/170x95" alt="" class="img1 img-responsive">
                                    <img src="http://placehold.it/170x95" alt="" class="img2 img-responsive">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-2 col-xs-6">
                    <div class="thumb1 animated">
                        <div class="thumbnail clearfix">
                            <a href="#">
                                <figure>
                                    <img src="http://placehold.it/170x95" alt="" class="img1 img-responsive">
                                    <img src="http://placehold.it/170x95" alt="" class="img2 img-responsive">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-2 col-xs-6">
                    <div class="thumb1 animated">
                        <div class="thumbnail clearfix">
                            <a href="#">
                                <figure>
                                    <img src="http://placehold.it/170x95" alt="" class="img1 img-responsive">
                                    <img src="http://placehold.it/170x95" alt="" class="img2 img-responsive">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-2 col-xs-6">
                    <div class="thumb1 animated">
                        <div class="thumbnail clearfix">
                            <a href="#">
                                <figure>
                                    <img src="http://placehold.it/170x95" alt="" class="img1 img-responsive">
                                    <img src="http://placehold.it/170x95" alt="" class="img2 img-responsive">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-2 col-xs-6">
                    <div class="thumb1 animated">
                        <div class="thumbnail clearfix">
                            <a href="#">
                                <figure>
                                    <img src="http://placehold.it/170x95" alt="" class="img1 img-responsive">
                                    <img src="http://placehold.it/170x95" alt="" class="img2 img-responsive">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-2 col-xs-6">
                    <div class="thumb1 animated">
                        <div class="thumbnail clearfix">
                            <a href="#">
                                <figure>
                                    <img src="http://placehold.it/170x95" alt="" class="img1 img-responsive">
                                    <img src="http://placehold.it/170x95" alt="" class="img2 img-responsive">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    


@endsection