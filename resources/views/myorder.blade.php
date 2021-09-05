@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-block">
            <h2>Orders List</h2>
            <div class="">
              @foreach ($orders as $item)
              <div class="row search-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}" alt="">
                    </a>
                </div>
                <div class="col-sm-3">
                    <div class="">
                        <h3>{{$item->name}}</h3>
                        <h5>Delivery Status : {{$item->status}}</h5>
                        <h5>Payment Status : {{$item->payment_status}}</h5>
                        <h5>Payment Method : {{$item->payment_method}}</h5>
                        <h5>Delivery Address : {{$item->address}}</h5>
                        <h5>Price : {{$item->price}}</h5>
                    </div>                      
                </div>
                <div class="col-sm-3">
                    {{-- <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From cart</a> --}}
                </div>
              </div>
              @endforeach

            </div>
        </div>
    </div>
</div>
@endsection