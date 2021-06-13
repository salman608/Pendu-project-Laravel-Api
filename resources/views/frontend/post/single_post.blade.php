@extends('User.Asset')
@section('user_content')


<!-- ============ Breadcrumb ============ -->
<section class="breadcrumb_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bread_area">
                    <nav aria-label="breadcrumb bread_item">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============== Blog header =============== -->
<div class="blog_header_section">
    <div class="row">

        <div class="container">
            @foreach($header_post as $v_header_post)
            <div class="blog_header_content_area">
                <div class="blog_header_content">

                    <h4>Pendu blogs</h4>
                    <p>{{$v_header_post->title}} </p>

                </div>
                <div class="blog_header_img">
                    <img src="{{asset('uploads/images/posts/' . $v_header_post->featured_image)}}" alt="">

                </div>

            </div>
            @endforeach
            {{ $header_post->links() }}
        </div>

    </div>

</div>

<!-- ========== Blog next previous ============= -->
<!-- <div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="next_previous_section">

                <div class="previous_blog">
                    <span><a href="#"><i class="fas fa-arrow-left"></i></a></span>
                    <span><a href="#">Prev</a></span>
                </div>
                <div class="next_blog">

                    <span><a href="#">Next</a></span>
                    <span><a href="#"><i class="fas fa-arrow-right"></i></a></span>


                </div>

            </div>
        </div>
    </div>
</div> -->

<!-- ============ Blog content  ============== -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center blog_content_title_area  mt-5">
            <h4>{{$single_post->title}}.</h4>

            <div class="blog-dat blog_content_date_cat ">
                <ul>
                    <li style='list-style: none;'><a
                            href="">{{$single_post->serviceCategory->title}}</a></li>
                    <li style='    margin-left: 34px;'><span><a
                                href="">{{$single_post->created_at->format('F j, Y')}}</a></span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="blog_inner_content_section">
                <img src="{{asset('uploads/images/posts/' . $single_post->featured_image)}}" alt="">
                <p>{{$single_post->body}}
            </div>
        </div>

    </div>

    <div class="row ">
        <div class="col-12 text-center">


            <div class="blog_content_share_section ">
                <div class="share_invite">
                    <span>Share:-</span>
                    <a href="#" class='twiter' id="twr-btn" target="_blank"> <i class="fab fa-twitter-square"></i></a>
                    <a href="#" class='fb' id="fb-btn" target="_blank"> <i class="fab fa-facebook-square"></i></a>
                    {{-- <a href="#" class='ins' id="ins-btn" target="_blank"> <i class="fas fa-link"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="more_blog_section">
    <div class="container">
        <div class="more_blog_title2">
            <h3>More blogs</h3>
        </div>
    </div>

</div>

<div class="container mt-4">


    <div class="row">
        @foreach(App\Models\Post::inRandomOrder()->limit(3)->get() as $v_post)
        <div class="col-md-4 col-sm-6 mt-2 ">
            <div class="card blog_item ">
                <img class="card-img-top" src="{{asset('uploads/images/posts/' . $v_post->featured_image)}}" alt="Card image cap">
                <div class="blog-dat mt-4">
                    <ul>
                        <li style='list-style: none;'><a
                                href="">{{$v_post->serviceCategory->title}}</a></li>
                        <li><span><a href="">{{$v_post->created_at->format('F j, Y')}}</a></span></li>
                    </ul>
                </div>
                <div class="card-body blog_home_title">
                    <a href="{{route('singlepost',$v_post->id)}}">
                        <h5 class="card-title">{{Str::limit($v_post->title,40)}}, </h5>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

<script>
    // social share button

    const twiterBtn=document.getElementById('twr-btn');
    const facebookBtn=document.getElementById('fb-btn');
    const instagramBtn=document.getElementById('ins-btn');

    let postUrl=encodeURI(document.location.href);
    let postTitle=encodeURI('{{$single_post->title}}');

    twiterBtn.setAttribute("href",`https://twitter.com/share?url=${postUrl}&text=${postTitle}`);
    // instagramBtn.setAttribute("href",`https://www.instagram.com/sharer.php?u=${postUrl}`);
    facebookBtn.setAttribute("href",`https://www.facebook.com/sharer.php?u=${postUrl}`);

</script>

@endsection
