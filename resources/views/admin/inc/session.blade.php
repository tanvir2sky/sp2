@if(session('success'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{session('success')}}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {!! session('error') !!}
        <ul>
            @if($errors->all() > 0)
                @foreach ($errors->all() as $message)
                    <li>{{$message}}</li>
                @endforeach
            @endif
        </ul>
    </div>
@endif




