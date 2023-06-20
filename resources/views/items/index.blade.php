@extends('layouts.app')

@section('content')
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 justify-content-center align-items-center">

            <table class="table table-dark table-striped table-bordered" id="items-table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{trans('item.name')}}</th>
                        <th scope="col">{{trans('item.price')}}</th>
                        <th scope="col">{{trans('item.seller')}}</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>


        </div>
    </div>
</div>


@endsection

<script src="{{ asset('js/items/index.js') }}"></script>
<script src="{{ asset('js/items/drawItemsTable.js') }}"></script>
