@extends('admin.layouts.master')

@section('pagebody')

    <section class="content">
        <div class="box">
            <form class="form-horizontal" style="margin-top:30px;" method="post" action="{{route('room_type.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}

                <fieldset>

                    <!-- Form Name -->


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="room_name">Name</label>
                        <div class="col-md-4">
                            <input id="name" name="name" type="text" placeholder="Enter room type" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Description</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="textarea" name="textarea" name="description"></textarea>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="room_size">Room size</label>
                        <div class="col-md-4">
                            <input id="room_size" name="room_size" type="text" placeholder="Enter room size" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="allocation">Allocation</label>
                        <div class="col-md-4">
                            <input id="allocation" name="allocation" type="text" placeholder="Enter total number of people" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="price">Room Price</label>
                        <div class="col-md-4">
                            <input id="price" name="price" type="text" placeholder="Enter room price" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="images">Add Images</label>
                        <div class="col-md-4">
                            <input id="images" name="images" class="input-file" type="file">
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Add room type</button>
                        </div>
                    </div>

                </fieldset>
            </form>





            <!-- /.box-footer-->
        </div>
    </section>

@stop