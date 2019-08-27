@extends("layouts.master")
@section("content")
    <div id="google_map_wrapper">
        <div id="google_map"></div>
    </div>

    <div class="breadcrumbs1_wrapper">
        <div class="container">
            <div class="breadcrumbs1"><a href="index.html">Главная</a><span>/</span>Контакты</div>
        </div>
    </div>


    <div id="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-6">

                    <h3>Контактные данные</h3>

                    <p>
                        Описание
                    </p>

                    <br>

                    <h4>Адресс</h4>

                    <p>
                        <br>
                        Алматы<br>
                        <a href="#">kazalmaty@travelagency.com</a>
                    </p>

                    <h4>ТЕЛЕФОНЫ</h4>

                    <p>
                       +7 (727) 222 0602<br>
                       +7 (727) 367 0312<br>
                       +7 (727) 327 9918
                        
                    </p>

                    <div class="social3_wrapper">
                        <ul class="social3 clearfix">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                        </ul>
                    </div>


                </div>
                <div class="col-sm-6">

                    <h3>ОБРАТНАЯ СВЯЗЬ</h3>

                    <div id="note"></div>
                    <div id="fields">
                        <form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">

                            <div class="form-group">
                                <label for="inputName">Ваше Имя</label>
                                <input type="text" class="form-control" id="inputName" name="name" value="ФИО"
                                       onBlur="if(this.value=='') this.value='Full Name'"
                                       onFocus="if(this.value =='Full Name' ) this.value=''">
                            </div>

                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="text" class="form-control" id="inputEmail" name="email"
                                       value="E-mail" onBlur="if(this.value=='') this.value='E-mail'"
                                       onFocus="if(this.value =='E-mail' ) this.value=''">
                            </div>


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputMessage">Ваше сообщение</label>
                                        <textarea class="form-control" rows="7" id="inputMessage" name="content"
                                                  onBlur="if(this.value=='') this.value='Message'"
                                                  onFocus="if(this.value =='Message' ) this.value=''">Сообщение</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-default btn-cf-submit">Отправить сообщение</button>
                        </form>
                    </div>


                </div>
            </div>


        </div>
    </div>

@endsection