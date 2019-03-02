@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8" >
            <div class="card">
                <div class="card-header" style="background-color:#11255a;text-color:#ffffff"><span style="color:#ffffff">Dashboard</span></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                

                @if(!Auth::user()->isAdmin())
                    @if(count($orders_customer) > 0)
                    <span class="card-body">Latest orders:</span>
                    <div class="card-body">
                        <ul style="list-style: none;padding:2px">
                            @for($i = 0; $i < count($orders_customer); $i++)
                            <form method="post" action="{{ route('exterminate_order')}}">
                            @csrf
                                <?php $order = $orders_customer[$i]; ?>
                                <li class="card" style="border:none;padding:5px" >
                                    <span>Office: {{ App\Office::where('office_id', $order->office_id)->first()->adress}}</span>
                                    <span>Currency: {{ App\Currency::where('currency_code', $order->target_currency_code)->first()->currency_name}}</span>
                                    <span>Amount: {{ number_format($order->target_currency_amount,2) }}</span>
                                    <span>Status: {{ $order->status }}</span>
                                    @if($order->status == 'Moderation')
                                    <div style="width:30%">
                                    <button type="submit" style="background-color:#751209;width=50px"  value="{{$order->id}}" name="order_item" class="btn btn-primary">Cancel order</button>
                                    </div>
                                    @endif
                                </li>
                            </form>
                            @endfor
                        </ul>
                    </div>
                    @endif
                @endif

                @if(Auth::user()->isAdmin())
                @if(count($orders_employee) > 0)
                    <span class="card-body">Latest orders:</span>
                    <div class="card-body">
                        <ul style="list-style: none;padding:2px">
                            @for($i = 0; $i < count($orders_employee); $i++)
                            <form method="post" action="{{ route('manage_order')}}">
                            @csrf
                                <?php $order = $orders_employee[$i]; ?>
                                <li class="card" style="border:none;padding:5px" >
                                    <span>Office: {{ App\Office::where('office_id', $order->office_id)->first()->adress}}</span>
                                    <span>Currency: {{ App\Currency::where('currency_code', $order->target_currency_code)->first()->currency_name}}</span>
                                    <span>Amount: {{ number_format($order->target_currency_amount,2) }}</span>
                                    <span>Status: {{ $order->status }}</span>
                                    <div class="btn-group btn-group-justified">
                                    <button type="submit" style="width:100%;margin:2px"  value="{{$order->id}}" name="reject" class="btn btn-primary">Reject altogether</button>
                                    <button type="submit" style="width:100%;margin:2px"  value="{{$order->id}}" name="enqueue" class="btn btn-primary">Enqueue</button>
                                    <button type="submit" style="width:100%;margin:2px"  value="{{$order->id}}" name="complete" class="btn btn-primary">Complete</button>
                                    </div>
                                </li>
                            </form>
                            @endfor
                        </ul>
                    </div>
                    @endif
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
