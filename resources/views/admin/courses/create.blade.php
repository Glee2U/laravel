@extends('app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">新增 Course</div>

                <div class="panel-body">

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <br>
                        <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ URL('admin/courses') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" name="id" class="form-control" required="required">
                        <br>
                        <input type="text" name="id" class="form-control" required="required">
                        <br>
                        <input type="text" name="id_1" class="form-control" required="required">
                        <br>
                        <input type="text" name="id_2" class="form-control" required="required">
                        <br>
                        <input type="text" name="id_3" class="form-control" required="required">
                        <br>
                        <input type="text" name="id_4" class="form-control" required="required">
                        <br>
                        <input type="text" name="name" class="form-control" required="required">
                        <br>
                        <input type="text" name="author" class="form-control" required="required">
                        <br>
                        <input type="text" name="introduction" class="form-control" required="required">
                        <br>
                        <input type="text" name="body" class="form-control" required="required">
                        <br>
                        <input type="text" name="pay_type" class="form-control" required="required">
                        <br>
                        <input type="text" name="score" class="form-control" required="required">
                        <br>
                        <input type="text" name="ava_dir" class="form-control" required="required">
                        <br>
                        <input type="text" name="vid_dir" class="form-control" required="required">
                        <br>
                        <button class="btn btn-lg btn-info">新增 Course</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection