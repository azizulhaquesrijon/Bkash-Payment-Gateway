<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .top_rw{ background-color:#f4f4f4; }
            .td_w{ }
            button{ padding:5px 10px; font-size:14px;}
            .invoice-box {
                max-width: 890px;
                margin: auto;
                padding:10px;
                border: 1px solid #eee;
                box-shadow: 0 0 10px rgba(0, 0, 0, .15);
                font-size: 14px;
                line-height: 24px;
                font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                color: #555;
            }
            .invoice-box table {
                width: 100%;
                line-height: inherit;
                text-align: left;
                border-bottom: solid 1px #ccc;
            }
            .invoice-box table td {
                padding: 5px;
                vertical-align:middle;
            }
            .invoice-box table tr td:nth-child(2) {
                text-align: right;
            }
            .invoice-box table tr.top table td {
                padding-bottom: 20px;
            }
            .invoice-box table tr.top table td.title {
                font-size: 45px;
                line-height: 45px;
                color: #333;
            }
            .invoice-box table tr.information table td {
                padding-bottom: 40px;
            }
            .invoice-box table tr.heading td {
                background: #eee;
                border-bottom: 1px solid #ddd;
                font-weight: bold;
                font-size:12px;
            }
            .invoice-box table tr.details td {
                padding-bottom: 20px;
            }
            .invoice-box table tr.item td{
                border-bottom: 1px solid #eee;
            }
            .invoice-box table tr.item.last td {
                border-bottom: none;
            }
            .invoice-box table tr.total td:nth-child(2) {
                border-top: 2px solid #eee;
                font-weight: bold;
            }
            @media only screen and (max-width: 600px) {
                .invoice-box table tr.top table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }
                .invoice-box table tr.information table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }
            }
            /** RTL **/
            .rtl {
                direction: rtl;
                font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            }
            .rtl table {
                text-align: right;
            }
            .rtl table tr td:nth-child(2) {
                text-align: left;
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="row" style="margin: 5px;">
              <div class="col text-center">
                <button type="button" class="btn btn-primary btn-lg" id="bKash_button"> PAY WITH BKASH</button>
              </div>
            </div>
          </div>
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
            <tr class="top_rw">
               <td colspan="2">
                  <h2 style="margin-bottom: 0px;"> Tax invoice/Bill of Supply/Cash memo </h2>
                  <span style=""> Number: 27B00032991LQ354 Date: 21-11-2018 </span>
               </td>
                <td  style="width:30%; margin-right: 10px;">
                    PaytmMall Order Id: 6580083283
               </td>
            </tr>
                <tr class="top">
                    <td colspan="3">
                        <table>
                            <tr>
                                <td>
                                <b> Sold By: Nova Enterprises </b> <br>
                                    Delhivery Pvt. Ltd. Plot No. A5 Indian Corporation <br>
                                    Warehouse Park Village Dive-anjur, Bhiwandi, Off <br>
                                    Nh-3, Near Mankoli Naka, District Thane, Pin Code :
                                    421302 <br>
                                    Mumbai, Maharashtra - 421302 <br>
                                    PAN: AALFN0535C <br>
                                    GSTIN: 27AALFN0535C1ZK <br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="information">
                      <td colspan="3">
                        <table>
                            <tr>
                                <td colspan="2">
                                    <b> Shipping Address: w3learnpoint </b> <br>
                                    Kokar, Ranchi <br>
                                    +0651-908-090-009<br>
                                    info@w3learnpoint.com<br>
                                    www.w3learnpoint.com
                                </td>
                                <td> <b> Billing Address: w3learnpoint </b><br>
                                    Acme Corp.<br>
                                    John Doe<br>
                                    john@example.com
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <td colspan="3">
                <table cellspacing="0px" cellpadding="2px">
                <tr class="heading">
                    <td style="width:25%;">
                        ITEM
                    </td>
                    <td style="width:10%; text-align:center;">
                        QTY.
                    </td>
                    <td style="width:10%; text-align:right;">
                        PRICE (INR)
                    </td>
                     <td style="width:15%; text-align:right;">
                       TAX RATE & TYPE
                    </td>
                     <td style="width:15%; text-align:right;">
                        TAX AMOUNT (INR)
                    </td>
                     <td style="width:15%; text-align:right;">
                       TOTAL AMOUNT (INR)
                    </td>
                </tr>
                <tr class="item">
                   <td style="width:25%;">
                        Johnson's Baby Skincare Wipes 80s
                        Pack Of 2 Rs. 60 Off
                        HSN Code :4818
                        novajj079
                    </td>
                    <td style="width:10%; text-align:center;">
                        2
                    </td>
                    <td style="width:10%; text-align:right;">
                        322.03
                    </td>
                     <td style="width:15%; text-align:right;">
                       18% IGST
                    </td>
                     <td style="width:15%; text-align:right;">
                        57.97
                    </td>
                     <td style="width:15%; text-align:right;">
                        380
                    </td>
                </tr>
                <tr class="item">
                   <td style="width:25%;"> <b> Grand Total </b> </td>
                    <td style="width:10%; text-align:center;"> 2 </td>
                    <td style="width:10%; text-align:right;">322.03</td>
                    <td style="width:15%; text-align:right;"></td>
                    <td style="width:15%; text-align:right;">57.97</td>
                    <td style="width:15%; text-align:right;">380</td>
                </tr>
                </td>
                </table>
                <tr class="total">
                      <input type="hidden" class="amount" value="380">
                      <input type="hidden" class="invoice" value="11122">
                      <td colspan="3" align="right">  Total Amount in Words :  <b> Three Hundred Eighty Rupees Only </b> </td>
                </tr>
                <tr>
                   <td colspan="3">
                     <table cellspacing="0px" cellpadding="2px">
                      
                         <tr>
                            <td width="50%">
                            </td>
                            <td>
                                 <b> Authorized Signature </b>
                                <br>
                                <br>
                                ...................................
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                     </table>
                   </td>
                </tr>
            </table>
        </div>
    
    </body>

    <!-----========================== AJAX ====================---------------------->
    <script src="https://code.jquery.com/jquery-1.8.3.min.js" integrity="sha256-YcbK69I5IXQftf/mYD8WY0/KmEDCv1asggHpJk1trM8=" crossorigin="anonymous"></script>
    
    <!-----========================== AXIOS ====================---------------------->
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>

    <!-----========================== FOR SANDBOX ====================---------------->
    <script id="myScript" src="https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js"></script>

    <!-----========================== FOR LIVE ====================------------------->
    {{-- <script id="myScript" src="https://scripts.pay.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout.js"></script> --}}

    <!-----========================== REQUIRED SCRIPT ====================---------------->

    <script>
        var accessToken = '';

        function bkashPayment(){
            var paymentConfig = {
                createCheckoutURL: "{!! route('createpayment') !!}",
                executeCheckoutURL: "{!! route('executepayment') !!}"
            };
        

            var paymentRequest;
            paymentRequest = {amount: $('.amount').val(), intent: 'sale', invoice: $('.invoice').val()};
        
            bKash.init({
                paymentMode: 'checkout',
                paymentRequest: paymentRequest,
                createRequest: function (request) {
                    $.ajax({
                        url: paymentConfig.createCheckoutURL + "?amount=" + paymentRequest.amount + "&invoice=" + paymentRequest.invoice,
                        type: 'GET',
                        contentType: 'application/json',
                        success: function (data) {
                            console.group();
                            console.log('=> createRequest success .....');
                            console.log(JSON.stringify(data));
        
                            var obj = JSON.parse(data);
        
                            if (data && obj.paymentID != null) {
                                console.group();
                                console.log('=> createRequest if .....');
                                paymentID = obj.paymentID;
                                bKash.create().onSuccess(obj);
                            }
                            else {
                                console.group();
                                console.log('=> createRequest else .....');
                                bKash.create().onError();
                            }
                        },
                        error: function () {
                            console.group();
                            console.log('=> createRequest error .....');
                            bKash.create().onError();
                        }
                    });
                },
        
                executeRequestOnAuthorization: function () {
                    console.group();
                    console.log('=> executeRequestOnAuthorization starting.....');
                    $.ajax({
                        url: paymentConfig.executeCheckoutURL + "?paymentID=" + paymentID,
                        type: 'GET',
                        contentType: 'application/json',
                        success: function (data) {
        
                            data = JSON.parse(data);
                            if (data?.paymentID != null) {
                                console.group();
                                console.log('=> executeRequestOnAuthorization if .....');
                                updateOrderPaymentStatusAndUpdateTnxNo(data?.merchantInvoiceNumber, data?.trxID)
                                location.replace('{{ route("home") }}');
        
                            }
                            else {
                                bKash.execute().onError();
                                console.group();
                                console.log('=> executeRequestOnAuthorization else .....');
                            }
                        },
                        error: function (err) {
                            console.group();
                            console.log('=> executeRequestOnAuthorization error .....');
                            bKash.execute().onError();
                        }
                    });
                }
            });
        }
        
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        
            $.ajax({
                url: "{!! route('token') !!}",
                type: 'POST',
                contentType: 'application/json',
                success: function (data) {
                    console.group();
                    console.log('=> token success .....');
                    accessToken = JSON.stringify(data);
                },
                error: function (err) {
                    console.group();
                    console.log('=> token err .....');
                    console.log(err);
                }
            });
            bkashPayment();
      
        });
        
        function callReconfigure(val) {
            console.group();
            console.log('=> callReconfigure .....');
            bKash.reconfigure(val);
        }
    
        function clickPayButton() {
            console.group();
            console.log('=> clickPayButton .....');
            $("#bKash_button").trigger('click');
        }
        
        
        
        
        async function updateOrderPaymentStatusAndUpdateTnxNo(orderNo, trxID) {
            try {
                const { data } = await axios.post(`{{ env('BASE_URL') }}/api/update-order-payment-status-by-order-no`, {
                        order_no: orderNo,
                        payment_tnx_no: trxID,
                        payment_method: 'Bkash',
                    });
            } catch (error) {
                console.error(error);
            }
        }
    </script>

</html>
