@extends('layouts.main')
@section('content')
<div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">{{$product->title}}</a>
              </h3>
              <div class="mb-1 text-muted">{{$product->created_at->format('d/m/y')}}</div>
              <p class="card-text mb-auto">{{$product->subtitle}}</p>
              <p class="card-text mb-auto">{{$product->getPrice()}}</p>
             <form method="post" action="">
              @csrf
              @method('post')
              <a href="{{route('')}}" class="btn btn-dark btn-lg" type="submit">Add To Cart</a> 
             </form>
             
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="{{ $product->image }}" alt="Card image cap">
          </div>
           <a href="{{route('product.index')}}" class="btn btn-info btn-lg">Back</a>
        </div>
@endsection