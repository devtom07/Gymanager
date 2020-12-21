
@extends('fontend.layouts.index')
@section('title', 'Bài viết')
@section('content')
<main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center slider-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>Bài viết</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start-->
        <section class="blog_area section-padding">
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach($listPosts as $list)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('/posts/'.$list->avatar) }}" height="300px">
                                </div>
                                <div class="blog_details">

                                    <a class="d-inline-block" href="{{route('detailblog',$list->id)}}">
                                        <h2 class="blog-head" style="color: #2d2d2d;">{{ $list->title }}</h2>
                                    </a>
                                    <p>{{ $list->detail }}</p>
                                    <p>{{ $list->start_posts }}</p>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Danh mục</h4>
                                <ul class="list cat-list">
                                    <li>
                                        @foreach($cate as $cate)

                                        <a href="{{ route('cateBlogs',$cate->id) }}" class="d-flex">
                                            <p style="color: black" >{{ $cate->name }}</p>
                                        </a>
                                        @endforeach
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>
@endsection