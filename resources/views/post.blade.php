@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('POSTS') }}
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="flex-center position-ref full-height">
                            <div class="row">
                                {{-- {{ request()->route('id') }}
                                --}}
                                @foreach ($postDetail as $post)
                                    <div class="card mb-3 w-100">
                                        <div class="card-header">
                                            <h2>{{ $post->post_name }}</h2>
                                        </div>
                                        <div class="card-body">

                                            <p>{{ $post->post }} </p>
                                        </div>
                                    </div>


                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
