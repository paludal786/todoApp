@extends('layouts.app')
@section('content')

    <div class="row" style="margin:20px">
        <div class="col-md-12 form-group">
            <a href="/"> <button class="pull-right btn btn-primary"> Go Back </button></a>
        </div>
    </div>



        @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{$error}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
        @endforeach


        <div class="row">
            <div class="col-md-3"></div>
                    <div class="col-md-9">
                            <form action="/api/todo/add" method="POST" >
                                {{ csrf_field() }}
                                <div class="col-sm-3">
                                      <label> Enter Your Task </label>
                                <textarea class="form-control" name="task" type="text">{{old('task')}}</textarea>
                                </div>
                                <div class="col-sm-3">
                                       <label>Select Your Time</label>
                                <input class="form-control" name="time" type="datetime-local" value="{{old('time')}}"/>
                                </div>
                                    <div class="col-sm-3">
                                        <label></label>
                                        <button class="form-control btn-xs btn-info">Submit</button>
                                    </div>
                            </form>
                    </div>
        </div>

@endsection
