@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('POSTS') }} <span class="float-right"
                            onclick="location.href='{{ url('createPost') }}'"><i class="fas fa-plus"></i></span>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="flex-center position-ref full-height">
                            <div class="row">

                                @foreach ($posts as $post)
                                    <div class="card mb-3 w-100">
                                        <div class="card-header">
                                            <h2>{{ $post->post_name }}</h2>
                                        </div>
                                        <div class="card-body">

                                            <p>{{ substr($post->post, 0, 100) }} <a
                                                    href="{{ url('post/' . $post->id) }}">Devamını
                                                    oku</a></p>
                                        </div>
                                    </div>


                                @endforeach

                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            {!! $posts->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
