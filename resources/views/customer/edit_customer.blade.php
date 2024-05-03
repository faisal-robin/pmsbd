@extends('layouts.master')

@section('content')

<style>
    span.select2.select2-container.select2-container--default{
        width: 450px !important;
    }
    .hide{
        display: none;
    }
    #valid-msg{
        color: green;
    }
    #error-msg{
        color: red;
    }
</style>

<div class="col-12 pt-5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Customer Info</h4>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form id="edit_form" autocomplete="off">
                <div class="form-row">

                    @method('PUT')

                    <div class="form-group col-md-6">
                        <label for="customer_first_name">First Name</label>
                        <input type="text" class="form-control" name="customer_first_name" value="{{$customer_info->customer_first_name}}" id="customer_first_name" placeholder="Customer Name">
                        <input type="hidden" class="form-control" name="id" value="{{$customer_info->id}}" id="id" placeholder="Customer Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="customer_last_name">Last Name</label>
                        <input type="text" class="form-control" name="customer_last_name" id="customer_last_name" value="{{$customer_info->customer_last_name}}" placeholder="Customer Name">
                    </div>



                    <div class="form-group col-md-6">
                        <label for="Name">Email</label>
                        <input type="text" class="form-control" value="{{$customer_info->customer_email}}" name="customer_email" id="customer_email" placeholder="Email">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="customer_phone">Phone</label>
                        <input id="customer_phone" value="{{$customer_info->customer_phone}}" class="form-control" name="customer_phone" type="tel">
                        <span id="valid-msg" class="hide">✓ Valid</span>
                        <span id="error-msg" class="hide"></span>
                    </div>


                    <div class="form-group col-md-6">
                        <label for="customer_postal_code">Postal Code</label>
                        <input id="customer_postal_code" value="{{$customer_info->customer_postal_code}}" class="form-control" name="customer_postal_code">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="customer_code">Code</label>                     
                        <input type="text" class="form-control" value="{{$customer_info->customer_code}}" name="customer_code" id="customer_code" value="#customer-code123" placeholder="Customer Name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="customer_address">Address</label>
                        <textarea class="form-control" name="customer_address" id="customer_address" rows="3" placeholder="Enter ...">{{$customer_info->customer_address}}</textarea>

                    </div>
                </div>
                 <!--Hiden Input-->
                    <!-- <input type="hidden" name="country_name" id="country_name" value="{{$customer_info->country_name}}">
                    <input type="hidden" name="country_id" id="country_id" value="{{$customer_info->country_id}}">
                    <input type="hidden" name="state_name" id="state_name" value="{{$customer_info->state_name}}">
                    <input type="hidden" name="state_id" id="state_id" value="{{$customer_info->state_id}}"> -->
                    <!--Hiden Input-->

                <button type="button" id="edit_btn" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


</div>

<script>

    $("#edit_btn").click(function () {

        var url = "{{url("customer")}}"
        var id = $('[name=id]').val();
        $(".error_msg").html('');
        var data = new FormData($('#edit_form')[0]);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: url + '/' + id,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {

            }
        }).done(function () {
            $("#success_msg").html("Data Save Successfully");
            window.location.href = "{{ url('customer')}}";
            //window.location.reload();
        }).fail(function (data, textStatus, jqXHR) {
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function (key, value) {
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });
    });


    //    Get States by country

    function getStates(string)
    {
        var splitted = string.split('|');
        var id = splitted.shift();
        var country_name = splitted.join(',');
        $('#country_id').val(id);
        $('#country_name').val(country_name);

        $.ajax({
            url: "{{url('get-states')}}/" + id,
            success: function (response) {
                $('#statesoption').html(response);
            }
        });
    }

</script>


@endsection


