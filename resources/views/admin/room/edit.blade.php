@extends('admin.layouts.master')

@section('pagebody')

    <section class="content">

        <!-- Default box -->
        <div class="box">
            <form class="form-horizontal" style="margin-top:30px;" method="post" action="{{route('room.update',$room->id)}}">
                {{csrf_field()}}
                {{method_field('put')}}
                <fieldset>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic">Room type</label>
                        <div class="col-md-4">
                            <select id="selectbasic" name="room_type_id" class="form-control">
                                @foreach($room_types as $room_type)
                                    <option value="{{$room_type->id}}">{{$room_type->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <!-- Multiple Radios -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="radios">Status</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="radios-0">
                                    <input type="radio" name="status" id="radios" value="1" >
                                    Allocated
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radios-1">
                                    <input type="radio" name="status" id="radios" value="0" >
                                    Unallocated
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button id="singlebutton" name="singlebutton" class="btn btn-success">Edit room</button>
                        </div>
                    </div>

                </fieldset>
            </form>






            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>

    <script>
        $(document).ready(function () {
            $('#selectbasic').val({{$room->room_type_id}});
            $('input:radio[name="status"]').filter('[value="{{$room->status}}"]').attr('checked', true);
        });
    </script>

@stop