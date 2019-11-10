@extends('layouts.app')
@section('content')

    <div class="row" style="margin:20px">
        <div class="col-md-12 form-group">
            <a href="/todo"> <button class="pull-right btn btn-primary"> Go Back </button></a>
        </div>
    </div>



        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-12">
                            <form action="/todo/add" method="POST" >
                                {{ csrf_field() }}
                                <div class="col-md-3">
                                      <label> Enter Your Task </label>
                                      <textarea class="form-control" name="task" type="text"></textarea>
                                </div>
                                <div class="col-md-3">
                                       <label>Select Your Time</label>
                                       <input class="form-control" name="time" type="datetime-local"/>
                                </div>
                                    <div class="col-md-3">
                                        <label></label>
                                        <button class="form-control btn btn-info">Submit</button>
                                    </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
