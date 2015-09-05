@extends('layouts.layout')

@section('title')
个人资料编辑
@endsection


@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">编辑 Page</div>

        <div class="panel-body">

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

          <form action="{{ URL('/user/'.Auth::user()->email) }}" method="POST">
            <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
           
            <div class="form-group">
              <label>昵称</label>
              <input type="text" name="name" class="form-control" required="required" value="{{ Auth::user()->name }}">
            </div>
            
            <div class="form-group">
              <label>位置</label>
            <input type="text" name="position" class="form-control" required="required" value="{{ Auth::user()->position }}"></div>

            <div class="form-group">
              <label>电话</label>
            <input type="text" name="phone" class="form-control"  value="{{ Auth::user()->phone }}"></div>
            <br>
            
            <br>
            <button class="btn btn-lg btn-info">编辑 Page</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection