@extends('layouts.app')
@section('content')


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
                          @if (Auth::user())

                          <td>{{ $item->task }}</td>
                        <td>{{ date('d-m-y  h:i A', strtotime($item->time)) }}</td>
                        <td>
                            <a href="api/todo/{{ $item->id }}/done"><button class="btn btn-primary btn-xs">Completed</button></a>
                            <a href="api/todo/{{ $item->id }}/edit">
                                <button class="btn btn-info btn-xs">Edit</button>
                            </a>
                            <a href="#">
                                <button class="btn btn-success btn-xs">Send Mail</button>
                            </a>
                        </td>
                    @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
        </div>
        {{ $activities->links() }}
        @else



        @if(Auth::user() && $activities)
        <div class="row"><marquee>Your TODO List is Empty</marquee></div>
        @else
        <div class="row"><marquee>Please Login To Create Your TODO List</marquee></div>
        @endif


        @endif



        @endsection
