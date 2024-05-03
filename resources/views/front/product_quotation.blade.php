@include('front.layouts.header_link')
@include('front.layouts.header')
    <div class="hero-wrap hero-bread" style="background-image: url({{ asset('public/front_asset/images/jenwear2.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Quotation</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section">
        <form id="quotation_form" autocomplete="off" class="billing-form">
              <div class="container">
                <div class="row justify-content-center">
                   <div class="col-xl-12">
                       <div id="message"></div>
                      <h1 class="mb-4 product-name">Product Details</h1>
                       <table id="product_table" class="table table-bordered ">
                            <thead class="theme-background theme-color">
                                <tr>
                                    <th width="10%">Sl</th>
                                    <th width="30%">Product</th>
                                    <th width="30%">Qty</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody class="mainbody">
                                <tr>
                                    <td class="rownumber">1</td>
                                    <td>
                                        <select id="product_id" class="select2 form-control" name="product_id[]">
                                            <option value="">Select Product</option>
                                            @foreach($all_product as $value)
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><input type="text" value="1" name="product_qty[]" class="form-control" style="height: 35px !important;"></td>
                                    <td><span id="add_qoute" style="font-size: 25px;color: #046ab5" class="icon-plus-circle"></span></td>
                                </tr>
                            </tbody>
                        </table>
                  </div>
                </div>
                <div class="row mt-5">
                    <div class="col-xl-12 ftco-animate">
                          <h1 class="mb-4 product-name">Your Details</h1>
                          <div class="row align-items-end">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Firt Name</label>
                              <input type="text" id="first_name" name="first_name" class="form-control" placeholder="">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                              <input type="text" id="last_name" name="last_name" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">State / Country</label>
                                    <div class="select-wrap">
                                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                          <select  name="country_id" id="country_id" class="form-control">
                                            <option value="France">France</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="South Korea">South Korea</option>
                                            <option value="Hongkong">Hongkong</option>
                                            <option value="Japan">Japan</option>
                                          </select>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="streetaddress">Street Address</label>
                              <input type="text" id="address" name="address" class="form-control" placeholder="House number and street name">
                            </div>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="towncity">Town / City</label>
                              <input type="text" id="city" name="city" class="form-control" placeholder="">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postcodezip">Postcode / ZIP *</label>
                              <input type="text" id="postcode" name="postcode" class="form-control" placeholder="">
                            </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                              <input type="text" id="phone" name="phone" class="form-control" placeholder="">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailaddress">Email Address</label>
                              <input type="text" id="email" name="email" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                              <textarea class="form-control" id="description" name="description"></textarea>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        </div>
                        <button type="button" id="add_btn" class="btn btn-primary py-3 px-4">Submit</button>
                  </div>
                </div>
              </div>
        </form><!-- END -->
    </section>
@include('front.layouts.footer')
@include('front.layouts.footer_link')

<script>
    $('#add_qoute').click(function () {
        $('#product_table > tbody:last').append('<tr><td class="rownumber"></td><td><select name="product_id[]" class="form-control select2"><option value="">Select Product</option>@foreach($all_product as $value)<option value="{{$value->id}}">{{$value->name}}</option>@endforeach</select></td><td><input class="form-control" style="height: 35px !important;" type="text" value="1" name="product_qty[]" /></td><td><span style="font-size: 25px;color:red" class="icon-minus-circle delete_row"></span></td></tr>'
        );
        renumberRows()
        $(".delete_row").click(function(event) {
            $(this).parent().parent().remove();
            renumberRows()
        });
        $('.select2').select2({ width: '100%' });
    });

        function renumberRows() {
            $(".mainbody > tr").each(function(i, v) {
                $(this).find(".rownumber").text(i + 1);
            });
        }

     $("#add_btn").click(function () {
        $("#add_btn").attr("disabled", true);
        $(".error_msg").html('');
        var data = new FormData($('#quotation_form')[0]);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token-home"]').attr('content')
            },
            method: "POST",
            url: "{{url("quotation_request")}}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {

            }
        }).done(function (response) {
            if (response.status === 'success'){
                $('#message').html("<div class='alert alert-success alert-dismissible fade show' role='alert'>"+response.msg+"<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                setTimeout(function(){
                    window.location.reload();
                }, 5000);
            }else if(response.status === 'error'){
                $('#message').html("<div class='alert alert-danger alert-dismissible fade show' role='alert'>"+response.msg+"<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
            }

        }).fail(function (data, textStatus, jqXHR) {
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function (key, value) {
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });
    });
</script>
