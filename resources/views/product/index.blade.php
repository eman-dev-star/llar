@extends('layouts.main')
@section('content')
@foreach($products as $product)
<div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">{{$product->title}}</a>
              </h3>
              <div class="mb-1 text-muted">{{$product->created_at->format('m/d/y')}}</div>
              <p class="card-text mb-auto">{{$product->subtitle}}</p>
              <p class="card-text mb-auto">{{$product->getPrice()}}</p>

              <a href="{{route('product.show',$product->slug)}}" class="btn btn-primary btn-lg">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="{$product->image}}" alt="Card image cap">
          </div>
        </div>
@endforeach
@endsection