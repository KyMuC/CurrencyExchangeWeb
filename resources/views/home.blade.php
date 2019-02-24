@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div>
                    <ul>
                        @for($i = 0; $i < count($currencies); $i++)
                            <?php $curr = $currencies[$i]; ?>
                            <li>
                                Код валюты: {{ $curr->currency_code }} Название валюты: {{ $curr->currency_name }}
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
