<!doctype html>
<html lang="en">
<!-- Author: Federico Jaramillo -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('messages.'aboutJufekMessage'')}}</title>
</head>
<body>
    <style>
        /*css*/
    </style>
    <br>
    <div class="container">
    <div class="card">
        <div class="card-header text-white bg-secondary">
            <div class="row justify-content-center">
                <h3>{{__('messages.order')}}</h3>
            </div>
        </div>
        <div class="card-body">
            @foreach($data["order"][0]->items as $item)
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <b>{{__('messages.product_name')}}: </b>
                    <a>{{ $item->product->getName() }}</a>
                    @if($item->customization)
                    <a><i>{{__('messages.with')}}</i> {{ $item->customization->getName() }}</a>
                    @endif
                </div>
                <div class="col-md-2">
                    <b>{{__('messages.amount')}}: </b>
                    <a>{{ $item->getAmount() }}</a>
                </div>
                <div class="col-md-2">
                    <b>{{__('messages.subtotal')}}: </b>
                    <a>${{ $item->getSubtotal() }}</a>
                </div>
            </div>
            @if(!$loop->last)
            <hr>
            @endif
            @endforeach
            <hr style="border-top: 2px solid black">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <b>{{__('messages.order_created')}}:</b> {{ $data["order"][0]->getDate() }}
                </div>
                <div class="col-md-3">
                    <b>{{__('messages.order_shipping_date')}}:</b> {{ $data["order"][0]->getShippingDate() }}
                </div>
                <div class="col-md-2">
                    <b>{{__('messages.state')}}: </b>
                    @if($data["order"][0]->getState() == "Active")
                    <a style="color: green;">{{ $data["order"][0]->getState() }}</a>
                    @else
                    <a style="color: red;">{{ $data["order"][0]->getState() }}</a>
                    @endif
                </div>
                <div class="col-md-2">
                    <b>{{__('messages.order_total')}}:</b> ${{ $data["order"][0]->getTotal() }}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>