@extends('layouts.layout')
@section('content')
 @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>上传失败</strong> 错误可能是由于以下原因<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
    <form action="{{route('addentry', [])}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="file" name="filefield">
        <input type="submit">
    </form>



                    <img src="{{route('getentry', Auth::user()->email.'.'.'jpg')}}" alt="ALT NAME" class="img-responsive" />
                   

@endsection
