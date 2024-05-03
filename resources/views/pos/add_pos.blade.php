@extends('layouts.master')

@section('content')

<style>
    span.select2.select2-container.select2-container--default {
        width: 450px !important;
    }
    .hide {
        display: none;
    }
    #valid-msg {
        color: green;
    }
    #error-msg {
        color: red;
    }
</style>

<div class="row pt-5">
    <div class="col-8">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="button" class="btn btn-primary">Action</button>
                            </div>
                            <input id="search_products" type="text" placeholder="Enter item name or scan barcode" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group">
                            <input type="text" placeholder="Sale Date" class="form-control">
                        </div>
                    </div>
                </div>
                
            </div>
        </div> 
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="button" class="btn btn-primary">Action</button>
                            </div>
                            <input type="text" placeholder="Enter Customer" class="form-control">
                        </div>
                    </div>
                </div>               
            </div>
        </div>       
    </div>
</div>

<div class="row pt-2">
    <div class="col-8">
        <div class="card">
            <div class="card-body p-0">
                <table id="product_table" class="table table-sm">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Disc %</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>   
    </div> 
    <div class="col-4">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <td>Subtotal</td>
                            <td><input class="form-control" autocomplete="off" type="text" name="sub_total" id="sub_total" readonly="" value="0.00" ></td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td><input class="form-control tax" readonly="" type="text" name="tax" value="0.00"></td>
                        </tr>
                        <tr>
                            <td>Discount all Items by Percent:</td>
                            <td><input class="form-control precent"  type="text" name="precent" value="0.00"></td>
                        </tr>
                        <tr>
                            <td>Discount Entire Sale:</td>
                            <td><input class="form-control discount_overall" type="text" name="discount_overall" value="0.00"></td>
                        </tr>
                        <tr>
                            <td>Grand Total</td>
                            <td><input class="form-control grand_toal" readonly="" type="text" name="grand_toal" value="0.00"></td>
                        </tr>
                    </tbody>
                </table> 
            </div>
        </div>        
    </div>  
</div>


<script type="text/javascript">
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $("#search_products").autocomplete({
        source: function (request, response) {
                // Fetch data
                $.ajax({
                    url: "{{ url('get-products') }}",
                    type: 'get',
                    dataType: "json",
                    data: {
                        _token: CSRF_TOKEN,
                        search: request.term
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            select: function (event, ui) {
                // Set selection
                $(this).val(''); // display the selected text
                
                var product_id = ui.item.value;
                $.ajax({
                    url: "{{ url('get-product-by-id') }}",
                    type: 'get',
                    dataType: "json",
                    data: {
                        _token: CSRF_TOKEN,
                        product_id:product_id,
                    },
                    success: function (data) {
                        console.log(data);
                        $('#product_table > tbody:last').append(
                            '<tr><td><i class="fas fa-trash text-danger delete_row"></i></td><td>'+data.name+'</td><td><input class="form-control item_price" type="text" name="item_price[]" data-id="'+data.id+'" id="item_price_'+data.id+'" value="'+data.price+'"/></td><td><input class="form-control item_qty" type="text" data-id="'+data.id+'" id="item_qty_'+data.id+'" name="item_qty[]" value="1"/></td><td><input class="form-control item_discount_percent" type="text" data-id="'+data.id+'" id="item_discount_percent_'+data.id+'" name="item_discount_percent[]" value="0.00"/></td><td><input class="form-control item_total_pirce" readonly type="text" name="item_total_pirce[]" data-id="'+data.id+'" id="item_total_pirce_'+data.id+'" value="'+data.price+'"/></td></tr>'
                            );

                        sub_total();

                        $(".delete_row").click(function(event) {
                            $(this).parent().parent().remove();
                            sub_total();
                        });

                        $(".item_qty").on("keyup", function(e) {
                            var id  = $(this).data('id');
                            var qty = $(this).val();
                            var price = $('#item_price_'+id).val();
                            total_price(id,qty,price);
                            sub_total();
                        })
                    }
                });

                return false;
            }
    });

    
    function total_price(id,qty,price){
        var total_price = qty * price;
        $('#item_total_pirce_'+id).val(total_price);
        sub_total();
    }

    function sub_total(){
        var total_price = 0;
        $(".item_total_pirce").each(function() {
           total_price += parseFloat($(this).val());
        });

        // console.log(total_price);

        $('#sub_total').val(total_price);
    }

    function grand_toal(){
       var sub_total =  $('#sub_total').val();
       var tax =  $('#tax').val();
       var discount_overall =  $('#discount_overall').val();
    }

</script>



@endsection


