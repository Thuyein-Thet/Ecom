@extends('master')
@section('content')
<div class="custom-product">
    <div class="trending-wrapper">
        <h3>Search Result</h3> <a href="/">Go back</a>
           @foreach($products as $item)
        <div class="trending-item">
            <a href="detail/{{$item['id']}}">
            <img class="trending-img" src="{{$item['gallery']}}">
            <div class="">
              <h3>{{$item['name']}}</h3>
            </div>
            </a>
          </div>
    
           @endforeach
        </div>

    </div>
        
</div>
@endsection