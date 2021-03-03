@extends('page.layout.master')
@section('content')
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="{{route('home')}}">Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><a href="{{route('news')}}">Tin tức</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Tin thời trang</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--blog area start-->
<div class="main_blog_area blog_details">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="blog_details_left">
                <div class="blog_gallery">
                    <div class="blog_header">
                        <h2><a>{{$news_detail->title}}</a></h2>
                        <div class="blog__post">
                            <ul>
                                <li class="post_author">Tác giả: {{$news_detail->author}}</li>
                                <li class="post_date">{{$news_detail->created_at->format('H:i d/m/Y')}} </li>
                            </ul>
                        </div>
                    </div>

                    <div class="blog_entry_content">
                        {!!$news_detail->content!!}
                    </div>
                    <div class="space40">&nbsp;</div>
                    <div class="space40">&nbsp;</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
            <div class="blog_details_right">

                <div class="blog_widget widget_recent  mb-30">
                    <h3>Tin mới nhất</h3>
                    <div class="widget_recent_inner">
                        @foreach($news as $new)
                        <div class="single_posts">
                            <div class="posts_thumb">
                                <a href="{{route('news_detail',$new->id)}}"><img src="{{asset('/frontend/image/news/'.$new->image)}}" style="width: 200px;height: 100px;" alt=""></a>
                            </div>
                            <div class="post_content">
                                <span>
                                    <a class="tweet_author" href="{{route('news_detail',$new->id)}}">{{$new->title}}</a>

                                </span>
                                <a>{{$new->created_at->format('d/m/Y')}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection