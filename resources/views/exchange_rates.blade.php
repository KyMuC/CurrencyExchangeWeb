@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8" >
            <div class="card">
                <div class="card-header" style="background-color:#11255a;text-color:#ffffff">
                    <form>
                    <select name="exchange_office" style="border:0px;outline:none;background-color:#11255a;color:#ffffff" onchange="this.form.submit()">
                    <!-- <option disabled selected>Select an exchange office</option> -->
                    <!-- <option selected value="{{ $offices[0]->office_id }}">{{$offices[0]->adress}}</option> -->
                    @if(!isset($_GET["exchange_office"]))
                    <option disabled selected>Select an exchange office</option>
                    @endif
                    @for($i = 0; $i < count($offices); $i++)
                    <?php $office = $offices[$i]?>
                    @if(isset($_GET["exchange_office"]))
                    <option <?php if ($_GET['exchange_office'] == $i+1) { ?>selected="true" <?php }; ?> value = "{{ $office->office_id }}">{{$office->adress}}</option>
                    @endif
                    @if(!isset($_GET["exchange_office"]))
                    <option value = "{{ $office->office_id }}">{{$office->adress}}</option>
                    @endif
                    @endfor
                    </select>
                    </form>
                </div>
                <div class="card-body">
                    @if(isset($_GET["exchange_office"]))
                        <?php
                            $office_id = $_GET["exchange_office"];
                            $exchange_rates = App\ExchangeRate::where([['date','=',date('Y-m-d')],['office_id','=',$office_id]])->get();
                            // $exchange_rates_for_real = array_filter((array)$exchange_rates, function(App\ExchangeRate $exchange_rate_param) {return $exchange_rate_param->date == date(Y-m-d);})
                        ?>
                        <table>
                            <tr>
                                <th>хуй</th>
                                <th>жопа</th>
                                <th style="text-align:right">хех</th>
                            </tr>    
                        @for($i = 0; $i < count($exchange_rates); $i++)
                        <?php $exchange_rate = $exchange_rates[$i] ?>
                            <tr>
                                <td style="width:15%">{{ App\Currency::where('currency_code', $exchange_rate->source_currency_code)->first()->currency_name }}</td>
                                <td style="width:15%">{{ App\Currency::where('currency_code', $exchange_rate->target_currency_code)->first()->currency_name }}</td>
                                <td style="width:70%;text-align:right">{{ number_format($exchange_rate->exchange_rate, 2) }}</td>
                            </tr>    
                        @endfor
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection