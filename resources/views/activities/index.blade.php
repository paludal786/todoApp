@extends('layouts.app')
@section('content')


@guest
    @if (Auth::user())

    <div class="row" style="margin:20px">
        <div class="col-md-9 form-group">
            <a href="/todo/add-form"> <button class="pull-right btn btn-primary"> Add Todo </button></a>
        </div>
    </div>
    @else

    @endif

@endguest


      <h2><center>{{$title ?? null}}</center></h2>

    @if (count($activities) > 0)

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">


            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Remind On</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activities as $item)
                    <tr>
                        <td>{{ $item->task }}</td>
                        <td>{{ date('d-m-y  h:i A', strtotime($item->time)) }}</td>
                        <td>
                            <a href="/todo/{{ $item->id }}/done"><button class="btn btn-info btn-xs">Completed</button></a>
                            <a href="/todo/{{ $item->id }}/edit">
                                <button class="btn btn-info btn-xs" >
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </button>
                            </a>
                            <a href="#">
                                <button class="btn btn-warning btn-xs">
                                    <span class="glyphicon glyphicon-gift"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
        </div>
        {{ $activities->links() }}
        @else

        <p> No Records Found </p>

        @endif



        @endsection
