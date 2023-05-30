<div class="modal" id="modal_form_validation_1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3>XXXXXXXXXXXXX</h3>
            </div>
        </div>
    </div>
</div>
@if (!empty(((session("err_alert_msg")??[]))))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-md alert-danger text-white" id="alert_message_notification" style="cursor: pointer">
            <label for="" class="text-white">Response Server ::</label>
            @foreach ((session("err_alert_msg")??[]) as $value)
                <li type="-"><label for="" class="text-white">{{$value[0]??""}}</label></li>
            @endforeach
        </div>
    </div>
</div>
@endif
@if (!empty(((session("success_alert_msg")??[]))))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-md alert-success text-white ml-1 mr-1" id="alert_message_notification" style="cursor: pointer">
            <label for="" class="text-white">Response Server ::</label>
            @foreach ((session("success_alert_msg")??[]) as $value)
                <li type="-"><label for="" class="text-white">{{($value[0]??"")}}</label></li>
            @endforeach
        </div>
    </div>
</div>
@endif