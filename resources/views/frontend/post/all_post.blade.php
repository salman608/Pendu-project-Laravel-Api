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
            <div class="blog_header_content_area">
                <div class="blog_header_content">
                    <h4>Pendu blogs</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Placeat consequuntur ducimus quasi </p>

                </div>
                <div class="blog_header_img">
                    <img src="{{asset('frontend')}}/assets/images/Illustrations/blog.png" alt="">

                </div>

            </div>
        </div>
    </div>
</div>





<div class="container mt-4">
    <div class="row">
        <div class="col-lg-5  ">
            @foreach($posts as $post)
            <div class="card blog_item blog_page_left_item1 mt-3">

                <img class="card-img-top" src="{{ asset('uploads/images/posts/' . $post->featured_image)}}"
                    alt="Card image cap">
                <div class="blog-dat mt-4">
                    <ul>
                        <li style='list-style: none;'><a href="#">{{$post->serviceCategory->title}}</a></li>
                        <li><span><a href="#">{{$post->created_at->format('F j, Y')}}</a></span></li>
                    </ul>
                </div>
                <div class="card-body blog_home_title">
                    <a href="{{route('singlepost',$post->id)}}">
                        <h5 class="card-title">{{Str::limit($post->title,40)}}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-lg-7 ">
          @foreach($side_post as $v_post)
            <div class="blog_right_article_area mt-3">
                <div class="blog_left_content">
                    <div class="blog-dat blog_page_date_cat ">
                        <ul>
                            <li style='list-style: none;'><a
                                    href="#">{{$v_post->serviceCategory->title}}</a></li>
                            <li><span><a href="#">{{$v_post->created_at->format('F j, Y')}}</a></span></li>
                        </ul>
                    </div>
                    <div class="blog_left_text">
                        <p> <a href="{{route('singlepost',$v_post->id)}}">{{Str::limit($v_post->title,40)}}</a></p>
                    </div>
                </div>

                <div class="blog_right_bar_img">
                    <img src="{{asset('uploads/images/posts/' . $v_post->featured_image)}}" alt="">
                </div>

            </div>
            @endforeach

        </div>
    </div>

    <!-- -------- all article ---------- -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="all_article_title">
                <h3>All articles</h3>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($all_post as $post)
        <div class="col-md-4 col-sm-6 mt-2 ">
            <div class="card blog_item ">
                <img class="card-img-top" src="{{asset('uploads/images/posts/' . $post->featured_image)}}"
                    alt="Card image cap">
                <div class="blog-dat mt-4">
                    <ul>
                        <li style='list-style: none;'><a href="#">{{$post->serviceCategory->title}}</a></li>
                        <li><span><a href="#">{{$post->created_at->format('F j, Y')}}</a></span></li>
                    </ul>
                </div>
                <div class="card-body blog_home_title">
                    <a href="{{route('singlepost',$post->id)}}">
                        <h5 class="card-title">{{Str::limit($post->title,40)}}</h5>
                    </a>
                </div>
            </div>

        </div>
        @endforeach

        <!-- ---------- pagination section ------------ -->
        <div class="pagination_section mt-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end" style="margin:20px 0">
                    {{-- {{ $all_post->links()}} --}}
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>

                    <li class="page-item">
                        <a class="page-link left_icon_pagi" href="#" aria-label="Previous">
                            <i class="fas fa-chevron-left"></i>

                        </a>
                    </li>

                    <li class="page-item active"><a class="page-link" href="#">1 </a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                        <a class="page-link left_icon_pagi" href="#" aria-label="Previous">
                            <i class="fas fa-chevron-right"></i>

                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</div>









<!-- ================ Footer  ============= -->

<!-- --------- invite section --------------- -->
<section class="invite_area py-4 mt-4">
    <div class="container inner_footer py-4">
        <div class="row">
            <div class="col-md-12 text-center">

                <div class="invite_content">
                    <h1> Invite a friend , you both get $15 </h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt
                        ut labore et dolore magna</p>

                </div>

                <div class="invite_mail">
                    <form>
                        <div class="form-group form-inline ">
                            <input type="email" class="form-control  mail_input" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email address">

                            <a href="#"><button type="submit" class="btn invite_button">Send invite</button></a>
                        </div>

                        <p class='more_way'>More way to invite</p>

                        <div class="section_tooltipss">
                            <input type="text" class=" link_input"
                                value="https://fontawesome.com/icons?d=gallery&q=apple" id="myInput1">

                            <div class="tooltip22">
                                <button type="button" class="btn invite_button2" onclick="myFunctions()"
                                    onmouseout="outFunca()">
                                    <span class="tooltiptext1" id="myTooltip1">Copy to clipboard</span>
                                    Copy text
                                </button>
                            </div>
                        </div>

                        <div class="share_invite">
                            <span>Share:-</span>
                            <a href="#" class='twiter'> <i class="fab fa-twitter-square"></i></a>
                            <a href="#" class='fb'> <i class="fab fa-facebook-square"></i></a>
                            <a href="#" class='ins'> <i class="fab fa-instagram-square"></i></a>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

</section>

@endsection
