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
                    <div class="col-lg-4 col-md-12">
                        <div class="blog_details_right">
                            <div class="blog_widget widget_recent  mb-30">
                                <h3>Tin xem nhiều</h3>
                                <div class="widget_recent_inner">
                                    @foreach($news_views as $views)
                                    <div class="single_posts">
                                        <div class="posts_thumb">
                                            <a href="{{route('news_detail',$views->id)}}"><img src="{{asset('/frontend/image/news/'.$views->image)}}" style="width: 200px;height: 100px;" alt=""></a>
                                        </div>
                                        <div class="post_content">
                                            <span>
                                                <a class="tweet_author" href="{{route('news_detail',$views->id)}}">{{$views->title}}</a>

                                            </span>
                                            <a>{{$views->created_at->format('d/m/Y')}}</a><br>
                                            <a>Lượt xem:{{$views->news_views}} </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="blog_details_left">
                            @foreach($news as $new)
                            <div class="blog_gallery">
                                <div class="blog_thumb blog__hover">
                                    <a href="{{route('news_detail',$new->id)}}"><img src="{{asset('/frontend/image/news/'.$new->image)}}" style="width:750px;height: 450px;" alt=""></a>
                                </div>
                                <div class="blog_header">
                                    <div class="blog__post">
                                        <ul>
                                            <li class="post_author">Tác giả : {{$new->author}}</li>
                                            <li class="post_date">{{$new->created_at->format('H:i d/m/Y')}} </li>
                                        </ul>
                                    </div>
                                </div>

                                <div style="font-size: 20px;" class="blog_fullwidth_desc">
                                    {{$new->title}}
                                </div>
                            </div>
                            <div class="space40">&nbsp;</div>
                            <div class="space40">&nbsp;</div>
                            @endforeach
                            <div class="row">{{$news->appends(request()->query())->links('vendor.pagination.bootstrap-4')}}</div>
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