@extends('page.layout.master')
@section('content')
<div class="pos_page">
        <div class="container">
            <!--pos page inner-->
            <div class="pos_page_inner">

                <!--breadcrumbs area start-->
                <div class="breadcrumbs_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb_content">
                                <ul>
                                    <li><a href="{{route('home')}}">Trang chủ</a></li>
                                    <li><i class="fa fa-angle-right"></i></li>
                                    <li>Tin tức</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!--breadcrumbs area end-->

                <!--blog area start-->
                <div class="main_blog_area">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <div class="blog_details_right">
                                
                                <div class="blog_widget widget_recent  mb-30">
                                    <h3>Tin mới nhất</h3>
                                    <div class="widget_recent_inner">
                                        <div class="single_posts">
                                            <div class="posts_thumb">
                                                <a href="#"><img src="assets\img\blog\blog11.jpg" alt=""></a>
                                            </div>
                                            <div class="post_content">
                                                <span>
                                                            <a class="tweet_author" href="#">blog1 Blog image post </a>

                                                        </span>
                                                <a href="#"> March 10, 2018 </a>
                                            </div>
                                        </div>
                                        <div class="single_posts">
                                            <div class="posts_thumb">
                                                <a href="#"><img src="assets\img\blog\blog13.jpg" alt=""></a>
                                            </div>
                                            <div class="post_content">
                                                <span>
                                                            <a class="tweet_author" href="#">blog1 Blog image post </a>

                                                        </span>
                                                <a href="#"> March 10, 2018 </a>
                                            </div>
                                        </div>
                                        <div class="single_posts">
                                            <div class="posts_thumb">
                                                <a href="#"><img src="assets\img\blog\blog14.jpg" alt=""></a>
                                            </div>
                                            <div class="post_content">
                                                <span>
                                                            <a class="tweet_author" href="#">blog1 Blog image post </a>

                                                        </span>
                                                <a href="#"> March 10, 2018 </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_widget widget_recent  mb-30">
                                    <h3>Tin xem nhiều</h3>
                                    <div class="widget_recent_inner">
                                        <div class="single_posts">
                                            <div class="posts_thumb">
                                                <a href="#"><img src="assets\img\blog\blog11.jpg" alt=""></a>
                                            </div>
                                            <div class="post_content">
                                                <span>
                                                            <a class="tweet_author" href="#">blog1 Blog image post </a>

                                                        </span>
                                                <a href="#"> March 10, 2018 </a>
                                            </div>
                                        </div>
                                        <div class="single_posts">
                                            <div class="posts_thumb">
                                                <a href="#"><img src="assets\img\blog\blog13.jpg" alt=""></a>
                                            </div>
                                            <div class="post_content">
                                                <span>
                                                            <a class="tweet_author" href="#">blog1 Blog image post </a>

                                                        </span>
                                                <a href="#"> March 10, 2018 </a>
                                            </div>
                                        </div>
                                        <div class="single_posts">
                                            <div class="posts_thumb">
                                                <a href="#"><img src="assets\img\blog\blog14.jpg" alt=""></a>
                                            </div>
                                            <div class="post_content">
                                                <span>
                                                            <a class="tweet_author" href="#">blog1 Blog image post </a>

                                                        </span>
                                                <a href="#"> March 10, 2018 </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="blog_details_left">

                                <div class="blog_gallery">
                                    <div class="blog_header">
                                        <h2><a href="#">Blog image post</a></h2>
                                        <div class="blog__post">
                                            <ul>
                                                <li class="post_author">Posts by : admin</li>
                                                <li class="post_date"> Mar102015 </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog_thumb blog__hover">
                                        <a href="blog-details.html"><img src="assets\img\blog\blog7.jpg" alt=""></a>
                                    </div>
                                    <div class="blog_fullwidth_desc">
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                        <a href="#">read more</a>
                                    </div>
                                    <div class="wishlist-share">
                                        <h4>Share on:</h4>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
<!-- phân trang tại đây -->
                        </div>
                    </div>
                </div>
                <!--blog area end-->

            </div>
            <!--pos page inner end-->
        </div>
    </div>
@endsection