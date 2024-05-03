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
            <h4 class="card-title">Customer Info</h4>           
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form id="add_form" autocomplete="off">
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="customer_first_name">First Name</label>
                        <input type="text" class="form-control" name="customer_first_name" id="customer_first_name" placeholder="Customer Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="customer_last_name">Last Name</label>
                        <input type="text" class="form-control" name="customer_last_name" id="customer_last_name" placeholder="Customer Name">

                    </div>


                    <div class="form-group col-md-6">
                        <label for="Name">Email</label>
                        <input type="text" class="form-control" name="customer_email" id="customer_email" placeholder="Email">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="customer_phone">Phone</label>
                        <input id="customer_phone" class="form-control" name="customer_phone" type="tel">
                    </div>

                    <!-- <div class="form-group col-md-6">
                        <label for="Type">Country</label>
                        <select class="form-control" id="country" onchange="getStates(this.value)">
                            <option value="">Select Country</option>
                        </select>
                    </div> -->

                    <!-- <div class="form-group col-md-6">
                        <label for="Type">Region</label>
                        <select class="form-control" id="statesoption">

                        </select>
                    </div> -->

                    <div class="form-group col-md-6">
                        <label for="customer_postal_code">Postal Code</label>
                        <input id="customer_postal_code" class="form-control" name="customer_postal_code">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="customer_code">Code</label>                     
                        <input type="text" class="form-control" name="customer_code" id="customer_code" value="#customer-code123" placeholder="Customer Name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="customer_address">Address</label>
                        <textarea class="form-control" name="customer_address" id="customer_address" rows="3" placeholder="Enter ..."></textarea>

                    </div>

                    <!--Hiden Input-->
                    <input type="hidden" name="country_name" id="country_name"  value="1">
                    <input type="hidden" name="country_id" id="country_id" value="1">
                    <input type="hidden" name="state_name" id="state_name" value="1">
                    <input type="hidden" name="state_id" id="state_id" value="1">
                    <!--Hiden Input-->

                </div>

                <button type="button" id="add_btn" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
    $("#add_btn").click(function () {

        $(".error_msg").html('');
        var data = new FormData($('#add_form')[0]);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("customer")}}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {

            }
        }).done(function () {
            $("#success_msg").html("Data Save Successfully");
            window.location.href = "{{ url('customer')}}";
            // window.location.reload();
        }).fail(function (data, textStatus, jqXHR) {
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function (key, value) {
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });
    });

    // Get States by country

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

    $('#statesoption').change(function () {
        let state_value = $("select#statesoption option").filter(":selected").val();
        var splitted = state_value.split('|');
        var id = splitted.shift();
        var state_name = splitted.join(',');
        $('#state_id').val(id);
        $('#state_name').val(state_name);
    });

</script>


@endsection


