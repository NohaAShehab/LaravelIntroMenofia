@extends("itiwebsite.ititemp")


@section('innersection')
    this is inner section


        <table class="table">
          <tr>
              <th>
                  Name
              </th>
              <th>
                  Email
              </th>
              <th>
                  Track
              </th>
              <th>
                  Show
              </th>
              <th>
                  Edit
              </th>
              <th>
                  Delete
              </th>
          </tr>
        @foreach($students as $student)
            <tr>
                <td>
                    {{$student->name}}
                {{--                    represent object--}}
                </td>
                <td>
                    {{$student["email"]}}
                </td>
                <td>
                    {{$student["track"]}}
                </td>
                <td>
                    <a href="{{route("student.show",$student)}}">
                        Show Student {{$student["id"]}}
                    </a>
                </td>
                <td>
                    <a href="{{route("student.edit",$student)}}">
                        Edit Student {{$student["id"]}}
                    </a>
                </td>
                <td>
                    <form method="post"  action="{{route("student.delete",$student)}}">
                        @csrf
                        @method("delete")
                        <input type="submit"  value="Delete"class="btn btn-danger" >
                    </form>
                </td>
            </tr>


        @endforeach
        </table>
{{--        <a href="/iti/students/create" >--}}
{{--            Add New Student--}}
{{--        </a>--}}

        <a href="{{route("student.create")}}">
            Add new student

        </a>


@endsection
