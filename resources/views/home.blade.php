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
                    You are logged in!
                </div>

                @if(!Auth::user()->isAdmin())
                    @if(count($orders) > 0)
                    <span class="card-body">Latest orders:</span>
                    <div class="card-body">
                        <ul style="list-style: none;padding:2px">
                        <form method="post" action="{{ route('exterminate_order')}}">
                        @csrf
                            @for($i = 0; $i < count($orders); $i++)
                                <?php $order = $orders[$i]; ?>
                                <li class="card" value="{{$order->id}}" name="order_item">
                                    <span>Office: {{ App\Office::where('office_id', $order->office_id)->first()->adress}}</span>
                                    <span>Currency: {{ App\Currency::where('currency_code', $order->target_currency_code)->first()->currency_name}}</span>
                                    <span>Amount: {{ number_format($order->target_currency_amount,2) }}</span>
                                    <span>Status: {{ $order->status }}</span>
                                    <button type="submit" style="background-color:#ff0000">Submit</button>
                                </li>
                            @endfor
                        </form>
                            
                        </ul>
                    </div>
                    @endif
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
