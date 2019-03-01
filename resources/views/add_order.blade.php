@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Place an order') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('add_order') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="exchange_office" class="col-md-4 col-form-label text-md-right">{{ __('Exchange office') }}</label>

                            <div class="col-md-6">
                            <select id="exchange_office" name="exchange_office">
                            <option disabled selected>Select an exchange office</option>
                            @for($i = 0; $i < count($offices); $i++)
                            <?php $office = $offices[$i]?>
                            <option value = "{{ $office->office_id }}">{{$office->adress}}</option>
                            @endfor
                            </select>
                                <!-- <input id="passport_number" type="text" class="form-control{{ $errors->has('passport_number') ? ' is-invalid' : '' }}" name="passport_number" value="{{ old('passport_number') }}" required autofocus>

                                @if ($errors->has('passport_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('passport_number') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="currency" class="col-md-4 col-form-label text-md-right">{{ __('Currency') }}</label>

                            <div class="col-md-6">
                            <select id="currency" name="currency_code">
                            <option disabled selected>Select a currency</option>
                            @for($i = 0; $i < count($currencies); $i++)
                            <?php $currency = $currencies[$i]?>
                            <option value = "{{ $currency->currency_code }}">{{$currency->currency_code}} ({{$currency->currency_name}})</option>
                            @endfor
                            </select>
                                <!-- <input id="passport_number" type="text" class="form-control{{ $errors->has('passport_number') ? ' is-invalid' : '' }}" name="passport_number" value="{{ old('passport_number') }}" required autofocus>

                                @if ($errors->has('passport_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('passport_number') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="target_currency_amount" class="col-md-4 col-form-label text-md-right">{{ __('Target currency amount') }}</label>

                            <div class="col-md-6">
                            <input id="target_currency_amount" name="target_currency_amount" type="number" step="0.01" min="0.01" value="0">
                            </div>
                            
                        </div>

                        <!-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add order') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
