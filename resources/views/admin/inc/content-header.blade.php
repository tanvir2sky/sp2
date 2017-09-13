<section class="content-header">
    <h1>
        {{$page_data['header']}}
        <small>{{$page_data['sub-header']}}</small>
    </h1>
    <div class="pad margin no-print" style="display: none" id="error_message_holder">
        <div class="callout callout-warning" style="margin-bottom: 0!important;">
            <h4 id="error_message_note"><i class="fa fa-info"></i> Note:</h4>
           <p id="error_message"></p>
        </div>
    </div>
    @include('admin.inc.session')
</section>