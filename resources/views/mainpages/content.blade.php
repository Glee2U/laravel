
@extends('layouts.layout')
@section('link')

<link href="{{asset('css/video/video-js.css')}}" rel="stylesheet" type="text/css">
<!-- video.js must be in the <head> for older IEs to work. -->
<script src="{{asset('js/video/video.js')}}"></script>
@endsection 


@section('content')
@if (Auth::guest())
              Please log in first
            @else

<section class="scrollable wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel" align="center">
                <br>
                <h1 class="m-t-none text-black">{{ $course->name }}</h1>
                <br>
            </div>

            <div class="panel">
                <!-- video player -->

                <div align="center">
                    <br>
                    <video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls preload="auto" width="800" height="450" poster="{{asset('images/video/demo.jpg')}}" data-setup="{}">
                        <source src="http://flatfull.com/themes/assets/video/big_buck_bunny_trailer.webm" type='video/mp4'>

                        <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                    </video>

                </div>

                <div class="jp-no-solution hide">
                    <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
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

            

           <!--comment-->
           <div id="comments" style="margin-bottom: 100px;">

    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div id="new">
      <form action="{{ URL('comment/store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="page_id" value="{{ $course->id }}">
        <input type="hidden" name="username" value="{{ Auth::user()->name }}">
        <input type="hidden" name="useremail" value="{{Auth::user()->email}}">
        
        <div class="form-group">
          <label>Content</label>
          <textarea name="content" id="newFormContent" class="form-control" rows="10" required="required"></textarea>
        </div>
        <button type="submit" class="btn btn-lg btn-success col-lg-12">Submit</button>
      </form>
    </div>

<script>
function reply(a) {
  var username = a.parentNode.parentNode.firstChild.nextSibling.getAttribute('data');
  var textArea = document.getElementById('newFormContent');
  textArea.innerHTML = '@'+username+' ';
}
</script>

    <div class="conmments" style="margin-top: 100px;">
     @foreach ($course->hasManyComments as $comment)

        <div class="one" style="border-top: solid 20px #efefef; padding: 5px 20px;">
          <div class="username" data="{{ $comment->username }}">
          
            <a href="{{ URL('user/'. $comment->useremail ) }}"><h3>{{ $comment->username}}</h3></a>
        
            <h6>{{ $comment->created_at }}</h6>
          </div>
          <div class="content">
            <p style="padding: 20px;">
              {{ $comment->content }}
            </p>
          </div>
          <div class="reply" style="text-align: right; padding: 5px;">
            <a href="#new" onclick="reply(this);">回复</a>
          </div>
        </div>

      @endforeach
    </div>
    <!--comment-->
            
        </div>

    </div>

</section>


@endif
@endsection