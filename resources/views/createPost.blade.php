@extends('layouts.app')
@section('content')
    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                <script type="text/javascript">
                    setTimeout(function() {
                        location.href = 'myposts';
                    }, 10000);

                </script>
            </div>
        @endif
        <form action="/createPost" method="post">
            @csrf
            <div class="form-group">
                <label for="post_name">Post Title</label>
                <input type="text" name="post_name" id="post_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="post">Your Post</label>
                <textarea name="post" id="post" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
