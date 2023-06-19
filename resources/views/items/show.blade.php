@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="page-header">
                    <h2>Item</h2>
                </div>
                <div class="card">
                    <div class="card-header">{{$item->name}}</div>

                    <div class="card-body">
                        {{$item->price}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection