@extends('layouts.app')

@section('main')
    <div>
        @livewire('shop-cart')
        @livewire('shop-summary')
    </div>
@endsection