@extends('.portal/layout')

@section('content')
    <div class="row hidden-xs">
        <div class="col-md-12">
            <div class="news-ticker clearfix">
                <div class="news-title">
                    <h3>Trending News</h3>
                </div>
                <ul id="ticker">
                    @foreach($rol as $r)
                        <li><a>{{$r}} <span>{{date("Y/m/d")}}</span></a></li>
                    @endforeach
                </ul>
                <div class="random clearfix">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Random">
                                <span class="random-article">
                                <i class="fa fa-random"></i>
                            </span>
                    </a>
                </div>
                <!-- end random -->
            </div>
            <!-- end news-ticker -->
        </div>
        <!-- end col -->
    </div>

    <div class="row homepage-version">
        <div class="col-md-9 col-sm-12 col-xs-12 m22">
            <div class="widget searchwidget">
                @for($x = 0; $x <20; $x++)
                <div class="large-widget m30">
                    <div class="post row clearfix">
                        <div class="col-md-3">
                            <div class="post-media">
                                <a href="https://www.buzzfeed.com/{{$lin[$x]}}">
                                    <img alt="" src="https://img.buzzfeed.com/buzzfeed-static{{$pic[$x]}}" class="img-responsive">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="title-area">
                                <div class="colorfulcats">
                                    <a href="#"><span class="label label-primary">BuzzFeed</span></a>
                                </div>
                                <a href="https://www.buzzfeed.com/{{$lin[$x]}}"><h3>{{$buz[$x]}}</h3></a>

                                <div class="large-post-meta">
                                    <span class="avatar"><a href="author.html"><img src="https://media.licdn.com/mpr/mpr/shrink_100_100/AAEAAQAAAAAAAAj7AAAAJDJhMzQ0Y2Q2LTUxODktNGU1ZC04MmQwLWNhN2ZmYjdlZTY0Zg.jpg" alt="" class="img-circle"> Ian Li</a></span>
                                    <small>&#124;</small>
                                    <span></i> {{date("Y/m/d")}}</span>

                                </div>
                                <!-- end meta -->
                            </div>
                            <!-- /.pull-right -->
                        </div>
                    </div>
                    <!-- end post -->
                </div>
                @endfor
                <!-- end large-widget -->
                <!-- end large-widget -->
            </div>
            <!-- end widget -->
        </div>
        <!-- end col -->

        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-title">
                    <h4>Medal Tally Table</h4>
                    <hr>
                </div>
                <!-- end widget-title -->
                <div class="large-widget m30">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Country</th>
                            <th><img src="./public/images/gold.png"></th>
                            <th><img src="./public/images/silver.png"></th>
                            <th><img src="./public/images/bronze.png"></th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($x = 0; $x <20; $x++)
                            <tr>
                                <td>{{$rank[$x]}}</td>
                                <td><img width="35px" height="20px" src="http://static.bbci.co.uk/onesport/2.8.1518/images/flags/vide-code/{{strtolower($cou[$x])}}.png" alt="">&nbsp;&nbsp;{{$cou[$x]}}</td>
                                <td>{{$gol[$x]}}</td>
                                <td>{{$sil[$x]}}</td>
                                <td>{{$bro[$x]}}</td>
                                <td>{{$gol[$x]+$sil[$x]+$bro[$x]}}</td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                    <!-- end post-desc -->
                </div>
                <!-- end large-widget -->
            </div>
            <!-- end social -->


            <!-- end widget -->
        </div>
        <!-- end col -->
    </div>
@stop