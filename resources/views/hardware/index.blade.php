@extends('pages.main')


@section('title','Show Your item')

@section('style')

    <style>

        .checked {
            color: gold;

        }

    </style>

@endsection



@section('content')
    <hr>
    <div class="row" style="margin-top: 10%; ">

        <div class="col-md-12">

            <table class="table table-striped table-responsive table-bordered table-hover table-condensed">
                <thead class="bg-dark" style="color: white">
                <tr>
                    <th>#</th>
                    <th>CPU</th>
                    <th>GPU</th>
                    <th>RAM</th>
                    <th>HD</th>
                    <th>SSD</th>
                    <th>Screen quality</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>

                <tbody>


                @foreach(   $hardwares as    $hardware)
                    <tr>
                        <td>{{   $hardware->id}}</td>
                        <td>{{   $hardware->cpu}}</td>
                        <td>{{   $hardware->gpu}}</td>
                        <td>{{   $hardware->ram}}</td>
                        <td>{{   $hardware->hd}}</td>
                        <td>{{   $hardware->ssd}}</td>
                        <td>{{   $hardware->screen_quality}}</td>
                        <td>{{   $hardware->created_at}}</td>
                        <td>{{   $hardware->updated_at}}</td>
                        <td>
                            {!! Form::model(   $hardware,['route'=>['hardware.edit',   $hardware->id],'files'=>'true','method'=>'GET']) !!}
                            {!! Form::submit('Edit',['class'=>'btn btn-xs btn-info']) !!}
                            {!! Form::close() !!}

                        </td>
                        <td>
                            {!! Form::open(['route'=>['hardware.destroy',   $hardware->id],'files'=>'true','method'=>'DELETE']) !!}
                            {!! Form::submit('Edit',['class'=>'btn btn-xs btn-danger']) !!}
                            {!! Form::close() !!}

                        </td>





                    </tr>
                @endforeach


                </tbody>
            </table>

        </div>


    </div>
















@endsection


@section('js')



@endsection



