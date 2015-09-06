  @extends('layouts.layout')

@section('title')
内容页
@endsection
@section('link')
 <link href="{{asset('css/video/video-js.css')}}" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="{{asset('js/video/video.js')}}"></script>
  @endsection
@section('content')     

   <section class="scrollable wrapper">
       <div class="row">
                <div class="col-sm-12">
                   <div class="panel" align="center">
                  <br>
                    <h1 class="m-t-none text-black">{{ $course->name }}</h1>
                   <br>
                   </div>

                  <div class="panel" >
                    <!-- video player -->
                    
                        <div align="center">
                          <br>
<video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
 preload="auto" width="800" height="450" poster="images/video/demo.jpg"
 data-setup="{}">
 <source src="http://flatfull.com/themes/assets/video/big_buck_bunny_trailer.webm" type='video/mp4'>

 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>

                        </div>
         
                        <div class="jp-no-solution hide">
                          <span>Update Required</span>
                          To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                        </div>
                 
                    <!-- / video player -->
                    <div class="wrapper-lg">
                      <h2 class="m-t-none text-black">{{ $course->introduction }}</h2>
                      <div class="post-sum">
                        {{ $course->body}}
                      </div>
                      <div class="line b-b"></div>
                      <div class="text-muted">
                        <i class="fa fa-user icon-muted"></i> by <a href="#" class="m-r-sm">{{ $course->author }}</a>
                        <i class="fa fa-clock-o icon-muted"></i> {{ $course->updated_at }}
                        <a href="#" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i> 3 comments</a>
                      </div>
                    </div>
                  </div>
                  <h4 class="m-t-lg m-b">3 Comments</h4>
                  <section class="comment-list block">
                    <article id="comment-id-1" class="comment-item">
                      <a class="pull-left thumb-sm">
                        <img src="{{asset('images/layout/a0.png')}}" class="img-circle">
                      </a>
                      <section class="comment-body m-b">
                        <header>
                          <a href="#"><strong>John smith</strong></a>
                          <label class="label bg-info m-l-xs">Editor</label> 
                          <span class="text-muted text-xs block m-t-xs">
                            24 minutes ago
                          </span>
                        </header>
                        <div class="m-t-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum.</div>
                      </section>
                    </article>
                    <!-- .comment-reply -->
                    <article id="comment-id-2" class="comment-item comment-reply">
                      <a class="pull-left thumb-sm">
                        <img src="{{asset('images/layout/a1.png')}}" class="img-circle">
                      </a>
                      <section class="comment-body m-b">
                        <header>
                          <a href="#"><strong>John smith</strong></a>
                          <label class="label bg-dark m-l-xs">Admin</label> 
                          <span class="text-muted text-xs block m-t-xs">
                            26 minutes ago
                          </span>
                        </header>
                        <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
                      </section>
                    </article>
                    <!-- / .comment-reply -->
                    <article id="comment-id-2" class="comment-item">
                      <a class="pull-left thumb-sm">
                        <img src="{{asset('images/layout/a2.png')}}" class="img-circle">
                      </a>
                      <section class="comment-body m-b">
                        <header>
                          <a href="#"><strong>John smith</strong></a>
                          <label class="label bg-dark m-l-xs">Admin</label> 
                          <span class="text-muted text-xs block m-t-xs">
                            26 minutes ago
                          </span>
                        </header>
                        <blockquote class="m-t">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                          <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                        </blockquote>
                        <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
                      </section>
                    </article>
                  </section>
                  <h4 class="m-t-lg m-b">Leave a comment</h4>
                  <form>
                    <div class="form-group pull-in clearfix">
                      <div class="col-sm-6">
                        <label>Your name</label>
                        <input type="text" class="form-control" placeholder="Name">
                      </div>
                      <div class="col-sm-6">
                        <label >Email</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Comment</label>
                      <textarea class="form-control" rows="5" placeholder="Type your comment"></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success">Submit comment</button>
                    </div>
                  </form>
                </div>
            
              </div>

</section>
              @endsection
