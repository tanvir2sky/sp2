@extends('admin.layouts.master')

@section('pagebody')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All room types</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right"
                                       placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Room Size</th>
                                <th>Allocation</th>
                                <th>Price</th>
                                <th>Total rooms</th>
                                <th>Image</th>
                                <th>Option</th>
                            </tr>
                            @foreach($room_types as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->room_size}}</td>
                                    <td>{{$row->allocation}}</td>
                                    <td>{{$row->price}}</td>
                                    <td>{{$row->rooms()->count()}}</td>
                                    <td><img src="{{asset('images/'.$row->images)}}" id="show" class="img-rounded"  width="100" height="100"></td>
                                    <td>
                                        <div class="btn-group">

                                            <a class="btn btn-info" href="{{route('room_type.edit',$row)}}">Edit</a>
                                            <a class="btn btn-danger" href="" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                                Delete
                                            </a>
                                            <form id="delete-form"
                                                  action="{{route('room_type.destroy',$row)}}"
                                                  method="POST" style="display: none;">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                            </form>

                                        </div>
                                    </td>
                                </tr>

                            @endforeach

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <section class="content">

@stop