 <!DOCTYPE html>
 <head>
    <style>
    body {
        font-family: sans-serif;
        font-size: 10pt;
    }

    p {
        margin: 0pt;
    }

    table.items {
        border: 0.1mm solid #e7e7e7;
    }

    td {
        vertical-align: top;
    }

    .items td {
        border-left: 0.1mm solid #e7e7e7;
        border-right: 0.1mm solid #e7e7e7;
    }

    table thead td {
        text-align: center;
        border: 0.1mm solid #e7e7e7;
    }

    .items td.blanktotal {
        background-color: #EEEEEE;
        border: 0.1mm solid #e7e7e7;
        background-color: #FFFFFF;
        border: 0mm none #e7e7e7;
        border-top: 0.1mm solid #e7e7e7;
        border-right: 0.1mm solid #e7e7e7;
    }

    .items td.totals {
        text-align: right;
        border: 0.1mm solid #e7e7e7;
    }

    .items td.cost {
        text-align: "."center;
    }
    </style>
</head>

<body>

    <table width="100%" style="font-family: sans-serif;" cellpadding="10">
        <tr>
            <td width="49%" style="border: 0.1mm solid #fff;">
                <img src="{{asset('public')}}/front_asset/images/logo-2.png" style="height: 100px" alt="Logo" align="left" border="0">
            </td>
            <td width="2%">&nbsp;</td>
            <td style="text-align: left;" width="49%" style="border: 0.1mm solid #fff; text-align: right;">
                <p><b>{{$company_info->name}}</b></p>
                <p>{{$company_info->address_1}}</p>
                <p>{{$company_info->phone_1}}</p>
                <p>{{$company_info->email}}</p>
            </td>
        </tr>
    </table>


    <table width="100%" style="font-family: sans-serif;" cellpadding="6">
        <tr>
            <td width="49%" style="background-color: #82ae46; color:#fff">Invoice Info</td>
            <!-- <td width="1%"></td> -->
            <td width="50%" style="background-color: #82ae46; color:#fff">Customer Info</td>
        </tr>
    </table>

    <table width="100%" style="font-family: sans-serif;" cellpadding="6">
        <tr>
            <td width="49%" style=" color:#000">
                <p><b>Quotation No: {{$quotation_info->quotation_no}}</b></p>
                <p>Date: {{$quotation_info->created_at}} </p>
            </td>
            <td width="2%">&nbsp;</td>
            <td width="49%" style="color:#000">
                <p><b>Name:</b> {{$quotation_info->first_name.' '.$quotation_info->last_name}}</p>
                <p><b>Phone:</b>{{$quotation_info->phone}}</p>
                <p><b>Email:</b>{{$quotation_info->email}}</p>
                <p>
                    <span><b>Country:</b>{{$quotation_info->country_id}}</span>
                    <span><b>City:</b>{{$quotation_info->city}}</span>
                    <span><b>Address:</b>{{$quotation_info->address}}</span>
                </p>
            </td>
        </tr>
    </table>

    <table class="items" width="100%" style="font-size: 14px; border-collapse: collapse;" cellpadding="8">
        <thead style="background-color: #f04e23;color: #fff">
            <tr style="background-color: #82ae46;color: #fff">
                <td  width="15%" style="text-align: left;color: #fff"><strong>SL</strong></td>
                <td width="45%" style="text-align: left;color: #fff"><strong>Product Name</strong></td>
                <td width="20%" style="text-align: left;color: #fff"><strong>Product Qty</strong></td>
            </tr>
        </thead>
        <tbody>
            <!-- ITEMS HERE -->
            @foreach($quotation_info->quotation_items as $quotation_item)
                <tr style="background-color: #eee">
                    <td style="line-height: 20px;">1</td>
                    <td style="line-height: 20px;">{{$quotation_item->product->name}}</td>
                    <td style="line-height: 20px;">{{$quotation_item->product_qty}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p style="margin-top: 10px"><b>Note:</b> {{$quotation_info->description}}</p>
 </body>
 </html>
