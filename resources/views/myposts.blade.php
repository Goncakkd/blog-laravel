@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('MY POSTS') }} <span class="float-right"
                            onclick="location.href='{{ url('createPost') }}'"><i class="fas fa-plus"></i></span>
                    </div>

                    <div class="card-body">


                        <div class="flex-center position-ref full-height">


                            @foreach ($posts as $post)
                                <div class="card mb-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>
                                                {{ $post->post_name }}
                                                <form action="/myposts" method="post">
                                                    @csrf

                                                    <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}"
                                                        class="form-control">

                                                    <button type="submit" class="btn float-right"> <i
                                                            class="fas fa-edit fa-xs"></i></button>
                                                </form>
                                                <form action="/myposts" method="post">
                                                    @csrf

                                                    <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}"
                                                        class="form-control">

                                                    <button class="btn float-right"> <i
                                                            class="fas fa-trash-alt fa-xs"></i></button>
                                                </form>

                                            </h1>

                                            <p>
                                                {{ $post->post }}
                                            </p>

                                        </div>
                                    </div>
                                </div>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
