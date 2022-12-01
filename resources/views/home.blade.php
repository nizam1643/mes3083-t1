@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        @forelse ($books as $book)
                            <div class="col-4">
                                <div class="card mb-3">
                                    <img src="{{ $book->image }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $book->title }}</h5>
                                    <p class="card-text">{{ $book->description }}</p>
                                    <p class="card-text"><small class="text-muted">{{ $book->author }}</small></p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
