@extends('admin.layouts.master')

@section('pagebody')

    <section class="content">
        <div class="box">
            <form class="form-horizontal" style="margin-top:30px;" method="post" action="{{route('room_type.update',$room_type->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('put')}}
                <fieldset>

                    <!-- Form Name -->


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="room_name">Name</label>
                        <div class="col-md-4">
                            <input id="name" name="name" type="text" value="{{$room_type->name}}" class="form-control input-md" required="">
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Description</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="textarea"  name="description">{{$room_type->description}}</textarea>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="room_size">Room size</label>
                        <div class="col-md-4">
                            <input id="room_size" name="room_size" type="text" value="{{$room_type->room_size}}" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="allocation">Allocation</label>
                        <div class="col-md-4">
                            <input id="allocation" name="allocation" type="text" value="{{$room_type->allocation}}" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="price">Room Price</label>
                        <div class="col-md-4">
                            <input id="price" name="price" type="text" value="{{$room_type->price}}" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="images">Add Images</label>
                        <div class="col-md-4">
                            <input id="images" name="images" class="input-file" type="file"  accept="image/gif, image/jpeg, image/png">
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Edit room type</button>
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('images/'.$room_type->images)}}" id="show" class="img-rounded"  width="304" height="236">
                        </div>
                    </div>

                </fieldset>
            </form>





            <!-- /.box-footer-->
        </div>
    </section>

    <script>

        $(document).ready(function () {
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#show').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#images").change(function(){
                readURL(this);
            });


        });
    </script>

@stop