@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8" >
            <div class="card">
                <div class="card-header" style="background-color:#11255a;text-color:#ffffff"><select style="background-color:#11255a;color:#ffffff">
                    <option selected value="{{$offices[0]->id}}">{{$offices[0]->adress}}</option>
                    @for($i = 1; $i < count($offices); $i++)
                    <?php $office = $offices[$i]?>
                    <option value = "{{$office->id}}">{{$office->adress}}</option>
                    @endfor
                    </select>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection