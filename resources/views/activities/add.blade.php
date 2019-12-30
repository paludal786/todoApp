@extends('layouts.app')
@section('content')

    <div class="row" style="margin:20px">
        <div class="col-md-12 form-group">
            <a href="/"> <button class="pull-right btn-xs btn-primary"> Go Back </button></a>
        </div>
    </div>



        <div class="row">
            <div class="col-md-3"></div>
                    <div class="col-md-9">
                            <form action="/todo/add" method="POST" >
                                {{ csrf_field() }}
                                <div class="col-sm-3">
                                      <label> Enter Your Task </label>
                                      <textarea class="form-control" name="task" type="text"></textarea>
                                </div>
                                <div class="col-sm-3">
                                       <label>Select Your Time</label>
                                       <input class="form-control" name="time" type="datetime-local"/>
                                </div>
                                    <div class="col-sm-3">
                                        <label></label>
                                        <button class="form-control btn-xs btn-info">Submit</button>
                                    </div>
                            </form>
                    </div>
        </div>

@endsection
