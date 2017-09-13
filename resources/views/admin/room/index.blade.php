@extends('admin.layouts.master')

            @section('pagebody')
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">All rooms </h3>

                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

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
                                            <th>#Room No</th>
                                            <th>Room Type</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                        @foreach($rooms as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->room_type()->first()->name}}</td>

                                            <td><span class="label label-{{$row->status ? 'success' : 'danger'}}">{{$row->status ? 'Alocated' : 'Unalocated'}}</span></td>
                                            <td>
                                                <div class="btn-group">


                                                    <a class="btn btn-info" href="{{route('room.edit',$row)}}">Edit</a>
                                                    <a class="btn btn-danger" href="" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                                        Delete
                                                    </a>
                                                    <form id="delete-form"
                                                          action="{{route('room.destroy',$row)}}"
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