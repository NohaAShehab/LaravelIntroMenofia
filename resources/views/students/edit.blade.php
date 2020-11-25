@extends("itiwebsite.ititemp")



@section('innersection')
    <h1> Edit Student </h1>

        <form action="{{route("student.update",$student)}}" method="post">
        @csrf
            @method("put")

            <input type="hidden" method="put">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control"   value="{{$student["name"]}}"
                   name="name" id="name" aria-describedby="std_nameHelp">
        </div>
        <div class="form-group">
            <label for="email">Track</label>
            <input type="text" class="form-control"  name="track" id="track"   value="{{$student["track"]}}"
                      aria-describedby="std_nameHelp">
        </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control"  name="email" id="email"
                   value="{{$student["email"]}}"
                      aria-describedby="std_nameHelp">
        </div>
            <div class="form-group">
                <label for="level">Level</label>
                <input type="number" class="form-control"
                       value="{{$student["level"]}}"
                       name="level" id="level" aria-describedby="std_nameHelp">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
