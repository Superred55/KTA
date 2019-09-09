@extends ("layouts.master")
@section("content")
  <div id="google_map2_wrapper" style="background-image: url(images/photo2.jpg);">
        <div id="google_map2"></div>
    </div>

    <div class="breadcrumbs1_wrapper">
        <div class="container">
            <div class="breadcrumbs1"><a href="/">Главная</a><span>/</span>Услуги<span>/</span>Туры</div>
        </div>
    </div>


    <div id="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-3">
                    <div class="sidebar-block">
                        <form action="javascript:void(0);">
                            <div class="col-sm-12 no-padding">
                                <div class="input1_wrapper">
                                    <label>Вылет из:</label>

                                    <div class="input2_inner">
                                        <input type="text" class="input" value="Prague, Vaclav Havel ">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label>До:</label>

                                    <div class="input2_inner">
                                        <input type="text" class="input" value="New-York, John F. Kennedy Intl.">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label>Дата вылета:</label>

                                    <div class="input1_inner">
                                        <input type="text" class="input datepicker" value="16/07/2014">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label>Дата прилета:</label>

                                    <div class="input1_inner">
                                        <input type="text" class="input datepicker" value="26/07/2014">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input2_wrapper">
                                    <label class="col-md-6" style="padding-left:0;padding-top:12px;">Взрослых:</label>

                                    <div class="input2_inner col-md-6" style="padding-right:0;padding-left:0;">
                                        <input type="text" class="form-control" value="2">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label class="col-md-6" style="padding-left:0;padding-top:12px;">Детей:</label>

                                    <div class="input2_inner col-md-6" style="padding-right:0;padding-left:0;">
                                        <input type="text" class="input" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="select1_wrapper">
                                    <label>Класс:</label>

                                    <div class="select1_inner">
                                        <select class="select2 select" style="width: 100%">
                                            <option value="1">Economy</option>
                                            <option value="2">Premium Economy</option>
                                            <option value="3">Business</option>
                                            <option value="4">First</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <label class="col-md-6" style="padding-left:0;padding-top:12px;"></label>

                            <div class="no-padding margin-top col-md-6 text-right" style="margin-top:30px;">
                                <button class="btn btn-default btn-cf-submit" style="width:100%;">Искать</button>
                            </div>
                            <div class="clearfix"></div>

                        </form>

                    </div>
                    <div class="clearfix"></div>
                    <div class="margin-top"></div>

                    <div class="star_rating_wrapper">
                        <div class="title">Фильтры</div>
                        <div class="content">
                            <div class="star_rating">
                                <form>
                                    <div>
                                        <input id="checkbox-1" class="checkbox1-custom" name="checkbox-1"
                                               type="checkbox" checked>
                                        <label for="checkbox-1"
                                               class="checkbox1-custom-label"><span>Без остановок</span></label>
                                    </div>
                                    <div>
                                        <input id="checkbox-2" class="checkbox1-custom" name="checkbox-2"
                                               type="checkbox">
                                        <label for="checkbox-2"
                                               class="checkbox1-custom-label"><span>1 остановка</span></label>
                                    </div>
                                    <div>
                                        <input id="checkbox-3" class="checkbox1-custom" name="checkbox-3"
                                               type="checkbox">
                                        <label for="checkbox-3"
                                               class="checkbox1-custom-label"><span>2+ остановок</span></label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="margin-top"></div>
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
                                                    <div class="txt1">Отзыв
                                                    </div>
                                                    <div class="txt2">George Smith</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sm_slider_inner">
                                                    <div class="txt1">Отзыв
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

                </div>
                <div class="col-sm-9">

                    <form action="javascript:;" class="form3 clearfix">
                        <div class="select1_wrapper txt">
                            <label>Sort by:</label>
                        </div>
                        <div class="select1_wrapper sel2">
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">Name</option>
                                    <option value="2">Name2</option>
                                    <option value="2">Name3</option>
                                </select>
                            </div>
                        </div>
                        <div class="select1_wrapper sel2">
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">Price (low)</option>
                                    <option value="1">Price (high)</option>
                                </select>
                            </div>
                        </div>
                        <div class="select1_wrapper sel2">
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">Top Seller</option>

                                    <option value="2">Down</option>
                                </select>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="thumb4">
                                <div class="thumbnail clearfix">
                                    <figure>
                                        <img src="http://placehold.it/262x171" alt="" class="img-responsive">
                                    </figure>
                                    <div class="caption">
                                        <div class="txt1">Abudabi - Zurich</div>
                                        <div class="txt3 clearfix">
                                            <div class="left_side">
                                                <div class="price">$250.00</div>
                                                <div class="nums">avg/person</div>
                                            </div>
                                            <div class="right_side"><a href="/booking-tours"
                                                                       class="btn-default btn1">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumb4">
                                <div class="thumbnail clearfix">
                                    <figure>
                                        <img src="http://placehold.it/262x171" alt="" class="img-responsive">
                                    </figure>
                                    <div class="caption">
                                        <div class="txt1">Sydney - Berlin</div>
                                        <div class="txt3 clearfix">
                                            <div class="left_side">
                                                <div class="price">$849.00</div>
                                                <div class="nums">avg/person</div>
                                            </div>
                                            <div class="right_side"><a href="/booking-tours"
                                                                       class="btn-default btn1">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumb4">
                                <div class="thumbnail clearfix">
                                    <figure>
                                        <img src="http://placehold.it/262x171" alt="" class="img-responsive">
                                    </figure>
                                    <div class="caption">
                                        <div class="txt1">Ankara - Munich</div>
                                        <div class="txt3 clearfix">
                                            <div class="left_side">
                                                <div class="price">$849.00</div>
                                                <div class="nums">avg/person</div>
                                            </div>
                                            <div class="right_side"><a href="/booking-tours"
                                                                       class="btn-default btn1">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hl1"></div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="thumb4">
                                <div class="thumbnail clearfix">
                                    <figure>
                                        <img src="http://placehold.it/262x171" alt="" class="img-responsive">
                                    </figure>
                                    <div class="caption">
                                        <div class="txt1">Zurich- Moscow</div>
                                        <div class="txt3 clearfix">
                                            <div class="left_side">
                                                <div class="price">$549.00</div>
                                                <div class="nums">avg/person</div>
                                            </div>
                                            <div class="right_side"><a href="/booking-tours"
                                                                       class="btn-default btn1">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumb4">
                                <div class="thumbnail clearfix">
                                    <figure>
                                        <img src="http://placehold.it/262x171" alt="" class="img-responsive">
                                    </figure>
                                    <div class="caption">
                                        <div class="txt1">Boston- Tbilisi</div>
                                        <div class="txt3 clearfix">
                                            <div class="left_side">
                                                <div class="price">$749.00</div>
                                                <div class="nums">avg/person</div>
                                            </div>
                                            <div class="right_side"><a href="/booking-tours"
                                                                       class="btn-default btn1">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumb4">
                                <div class="thumbnail clearfix">
                                    <figure>
                                        <img src="http://placehold.it/262x171" alt="" class="img-responsive">
                                    </figure>
                                    <div class="caption">
                                        <div class="txt1">Amsterdam- Viena</div>
                                        <div class="txt3 clearfix">
                                            <div class="left_side">
                                                <div class="price">$179.00</div>
                                                <div class="nums">avg/person</div>
                                            </div>
                                            <div class="right_side"><a href="/booking-tours"
                                                                       class="btn-default btn1">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hl1"></div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="thumb4">
                                <div class="thumbnail clearfix">
                                    <figure>
                                        <img src="http://placehold.it/262x171" alt="" class="img-responsive">
                                    </figure>
                                    <div class="caption">
                                        <div class="txt1">Berlin- Warsaw</div>
                                        <div class="txt3 clearfix">
                                            <div class="left_side">
                                                <div class="price">$69.00</div>
                                                <div class="nums">avg/person</div>
                                            </div>
                                            <div class="right_side"><a href="/booking-tours"
                                                                       class="btn-default btn1">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumb4">
                                <div class="thumbnail clearfix">
                                    <figure>
                                        <img src="http://placehold.it/262x171" alt="" class="img-responsive">
                                    </figure>
                                    <div class="caption">
                                        <div class="txt1">New York - Paris</div>
                                        <div class="txt3 clearfix">
                                            <div class="left_side">
                                                <div class="price">$539.00</div>
                                                <div class="nums">avg/person</div>
                                            </div>
                                            <div class="right_side"><a href="/booking-tours"
                                                                       class="btn-default btn1">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumb4">
                                <div class="thumbnail clearfix">
                                    <figure>
                                        <img src="http://placehold.it/262x171" alt="" class="img-responsive">
                                    </figure>
                                    <div class="caption">
                                        <div class="txt1">Riga- Prague</div>
                                        <div class="txt3 clearfix">
                                            <div class="left_side">
                                                <div class="price">$49.00</div>
                                                <div class="nums">avg/person</div>
                                            </div>
                                            <div class="right_side"><a href="/booking-tours"
                                                                       class="btn-default btn1">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pager_wrapper">
                        <ul class="pager clearfix">
                            <li class="prev"><a href="#">Previous</a></li>
                            <li class="li"><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li class="li"><a href="#">3</a></li>
                            <li class="li"><a href="#">4</a></li>
                            <li class="li"><a href="#">5</a></li>
                            <li class="li"><a href="#">6</a></li>
                            <li class="li"><a href="#">7</a></li>
                            <li class="li"><a href="#">8</a></li>
                            <li class="li"><a href="#">9</a></li>
                            <li class="li"><a href="#">10</a></li>
                            <li class="next"><a href="#">Next</a></li>
                        </ul>
                    </div>


                </div>
            </div>


        </div>
    </div>
    @endsection