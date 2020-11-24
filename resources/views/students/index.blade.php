@extends("itiwebsite.ititemp")


@section('innersection')
    this is inner section


        <table>
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
