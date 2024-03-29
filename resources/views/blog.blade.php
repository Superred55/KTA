@extends("layouts.master")
@section("content")
    <div id="google_map_wrapper" style="background-image: url(images/photo2.jpg); ">
        <div id="google_map"></div>
    </div>
        </div>
    </div>

    <div class="breadcrumbs1_wrapper">
        <div class="container">
            <div class="breadcrumbs1"><a href="index.html">Главная</a><span>/</span>Наш Блог</div>
        </div>
    </div>


    <div id="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-3">
                    <div class="blog_sidebar">

                        <div class="search-form-wrapper clearfix">
                            <form class="clearfix">
                                <input type="text" class="form-control" placeholder="" value="Search"
                                       onBlur="if(this.value=='') this.value='Search'"
                                       onFocus="if(this.value =='Search' ) this.value=''">
                                <a href="#" class=""><i class="fa fa-search"></i></a>
                            </form>
                        </div>

                        <h5>Categories</h5>

                        <ul class="ul4">
                            <li><a href="#">Travel Agency<span>125</span></a></li>
                            <li><a href="#">Flights<span>97</span></a></li>
                            <li><a href="#">Hotels<span>56</span></a></li>
                            <li><a href="#">Cruises<span>24</span></a></li>
                            <li><a href="#">Car<span>13</span></a></li>
                        </ul>

                        <div class="tabs3">
                            <div class="tabs3_tabs">
                                <ul>
                                    <li class="active"><a href="#tabs3-1">Popular</a></li>
                                    <li><a href="#tabs3-2">Recent</a></li>
                                </ul>
                            </div>
                            <div class="tabs3_content">
                                <div id="tabs3-1">

                                    <div class="news1">
                                        <a href="#">
                                            <div class="txt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                            </div>
                                            <div class="txt2">Date: <span>05 June, 2016</span></div>
                                        </a>
                                    </div>
                                    <div class="news1">
                                        <a href="#">
                                            <div class="txt1">Diam nonummy nibh euismod tincidunt ut laoreet dolore
                                                magna
                                            </div>
                                            <div class="txt2">Date: <span>07 June, 2016</span></div>
                                        </a>
                                    </div>
                                    <div class="news1">
                                        <a href="#">
                                            <div class="txt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                            </div>
                                            <div class="txt2">Date: <span>09 June, 2016</span></div>
                                        </a>
                                    </div>

                                </div>
                                <div id="tabs3-2">


                                    <div class="news1">
                                        <a href="#">
                                            <div class="txt1">Diam nonummy nibh euismod tincidunt ut laoreet dolore
                                                magna
                                            </div>
                                            <div class="txt2">Date: <span>15 June, 2016</span></div>
                                        </a>
                                    </div>
                                    <div class="news1">
                                        <a href="#">
                                            <div class="txt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                            </div>
                                            <div class="txt2">Date: <span>17 June, 2016</span></div>
                                        </a>
                                    </div>
                                    <div class="news1">
                                        <a href="#">
                                            <div class="txt1">Diam nonummy nibh euismod tincidunt ut laoreet dolore
                                                magna
                                            </div>
                                            <div class="txt2">Date: <span>19 June, 2016</span></div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <h5>Populat Tags</h5>

                        <ul class="tags1 clearfix">
                            <li><a href="#">Flights</a></li>
                            <li><a href="#">Travel Agency</a></li>
                            <li><a href="#">Early Booking</a></li>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">Cruises</a></li>
                            <li><a href="#">Car</a></li>
                        </ul>

                        <h5>Customer Reviews</h5>

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


                        <h5>Text Widget</h5>

                        <div class="text_widget">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </div>

                        <h5>Followers</h5>

                        <ul class="users clearfix">
                            <li><a href="#">
                                <figure><img src="http://placehold.it/70x70" alt="" class="img-responsive"><em></em>
                                </figure>
                            </a></li>
                            <li><a href="#">
                                <figure><img src="http://placehold.it/70x70" alt="" class="img-responsive"><em></em>
                                </figure>
                            </a></li>
                            <li><a href="#">
                                <figure><img src="http://placehold.it/70x70" alt="" class="img-responsive"><em></em>
                                </figure>
                            </a></li>
                            <li><a href="#">
                                <figure><img src="http://placehold.it/70x70" alt="" class="img-responsive"><em></em>
                                </figure>
                            </a></li>
                            <li><a href="#">
                                <figure><img src="http://placehold.it/70x70" alt="" class="img-responsive"><em></em>
                                </figure>
                            </a></li>
                            <li><a href="#">
                                <figure><img src="http://placehold.it/70x70" alt="" class="img-responsive"><em></em>
                                </figure>
                            </a></li>
                            <li><a href="#">
                                <figure><img src="http://placehold.it/70x70" alt="" class="img-responsive"><em></em>
                                </figure>
                            </a></li>
                            <li><a href="#">
                                <figure><img src="http://placehold.it/70x70" alt="" class="img-responsive"><em></em>
                                </figure>
                            </a></li>
                        </ul>


                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="blog_content">


                        <div class="post post-short">
                            <div class="post-header">
                                <div class="post-slide">
                                    <div id="sl1">
                                        <a class="sl1_prev" href="#"></a>
                                        <a class="sl1_next" href="#"></a>
                                        <div class="sl1_pagination"></div>
                                        <div class="carousel-box">
                                            <div class="inner">
                                                <div class="carousel main">
                                                    <ul>
                                                        <li>
                                                            <div class="sl1">
                                                                <div class="sl1_inner">
                                                                    <img src="/images/carribean.jpg" alt=""
                                                                         class="img-responsive">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sl1">
                                                                <div class="sl1_inner">
                                                                    <img src="/images/carribean.jpg" alt=""
                                                                         class="img-responsive">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="sl1">
                                                                <div class="sl1_inner">
                                                                    <img src="/images/carribean.jpg" alt=""
                                                                         class="img-responsive">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-story">
                                <h2>Lorem ipsum dolor sit amet</h2>

                                <div class="post-story-info">
                                    <div class="date1">April 16, 2016</div>
                                    <div class="by">Posted by <a href="#">George Smith</a> / <a href="#">26</a> Comments
                                    </div>
                                </div>

                                <div class="post-story-body clearfix">
                                    <div class="big_letter">L</div>
                                    <p>
                                        orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo consequat.
                                    </p>
                                    <p>
                                        aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                        ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                    </p>

                                    <blockquote class="blockquote1">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                        elit, sed diam nonummy nibh euismod tincidunt ut dolore aliquam erat volutpat.
                                        <div class="author">George Smith <span>Travel Agency</span></div>
                                    </blockquote>

                                    <p>
                                        Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming
                                        id quod mazim placerat facer possim assum. Typi non habent claritatem insitam;
                                        est usus legentis in iis qui facit eorum claritatem. Investigationes
                                        demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                        etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                                        est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                        litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem
                                        modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                    </p>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                        aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                                        vulputate velit esse molestie consequat, vel illum.
                                    </p>

                                </div>
                                <div class="post-story-link">
                                    <a href="/post" class="btn-default btn4">view post</a>
                                </div>
                            </div>
                        </div>

                        <div class="post post-short">
                            <div class="post-header">
                                <div class="post-video">
                                    <iframe src="http://player.vimeo.com/video/123829510?portrait=0&byline=0&title=0&badge=0"
                                            width="500" height="281" frameborder="0" webkitallowfullscreen
                                            mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="post-story">
                                <h2>Lorem ipsum dolor sit amet</h2>

                                <div class="post-story-info">
                                    <div class="date1">April 16, 2016</div>
                                    <div class="by">Posted by <a href="#">George Smith</a> / <a href="#">26</a> Comments
                                    </div>
                                </div>

                                <div class="post-story-body clearfix">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                        aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                                        vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                        facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                        aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                                        vulputate velit esse molestie consequat, vel illum.
                                    </p>

                                </div>
                                <div class="post-story-link">
                                    <a href="/post" class="btn-default btn4">view post</a>
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
    </div>
@endsection