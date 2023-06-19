@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="page-header">
                    <h2>All Items</h2>
                </div>
                @foreach($items as $item)
                <div class="card">
                    <div class="card-header">{{$item->name}}</div>

                    <div class="card-body">
                        {{$item->price}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection