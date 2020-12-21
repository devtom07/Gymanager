@extends('fontend.layouts.index')
@section('title', 'Bài viết')
@section('content')
<main>
      <!--? Hero Start -->
      <div class="slider-area2">
         <div class="slider-height2 d-flex align-items-center">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                           <div class="hero-cap hero-cap2 pt-70 text-center">
                              <h2>Chi tiết bài viết</h2>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- Hero End -->
      <!--? Blog Area Start -->
      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 posts-list">
                  <div class="single-post">

                     @foreach($post as $post)
                     <div class="feature-img">
                        <img class="img-fluid" src="{{ asset('/posts/'.$post->avatar) }}"height="300px">
                     </div>
                     <div class="blog_details">
                        <h2 style="color: #2d2d2d;">{{ $post->title }}
                        </h2>
                        <p class="excert">
                          {{ $post->detail }}
                        </p>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Blog Area End -->
   </main>
   @endsection