@extends("itiwebsite.ititemp")



@section('innersection')
    <h1> Add new post </h1>
{{--    <form action={{route('posts.store')}} method="Post">--}}
{{--        @csrf--}}
        <form action="{{route("students.insert")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control"  name="name" id="name" aria-describedby="std_nameHelp">
        </div>
        <div class="form-group">
            <label for="email">Track</label>
            <textarea class="form-control"  name="track" id="track" aria-describedby="std_nameHelp"> </textarea>
        </div>
            <div class="form-group">
            <label for="email">Email</label>
            <textarea class="form-control"  name="email" id="email" aria-describedby="std_nameHelp"> </textarea>
        </div>
            <div class="form-group">
                <label for="level">Email</label>
                <textarea class="form-control"  name="level" id="level" aria-describedby="std_nameHelp"> </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
