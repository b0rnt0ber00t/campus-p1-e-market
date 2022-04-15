@extends('layouts.dashboard.app')

@section('title', 'Shop')

@section('content')
@include('layouts.dashboard.components.response-message')
<div class="row justify-content-center">
  <div class="col-lg-8">
    @forelse ($packages as $package)
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div class="card-title">{{ $package->name }}</div>
          </div>
          <div class="col-lg-3">
            <div class="text-right">${{ $package->price }}</div>
          </div>
        </div>
        <textarea cols="30" disabled class="form-control">{{ $package->description }}</textarea>
        <form action="{{ route('order.store', $package->id) }}" method="post" class="mt-3">
          @csrf
          <button type="submit" class="btn btn-primary">Buy</button>
        </form>
      </div>
    </div>
    @empty
    <div class="card">
      <div class="card-body">
        <div class="card-title">No Package</div>
      </div>
    </div>
    @endforelse
  </div>
</div>
@endsection