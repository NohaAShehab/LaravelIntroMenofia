@extends("itiwebsite.ititemp")



@section('content')

    <h1>Student info</h1>
    <table class="table">
        <tr>
            <th>
                Name
            </th>
            <td>
                {{$student["name"]}}
            </td>
        </tr>

        <tr>
            <th>
                Email
            </th>
            <td>
                {{$student["email"]}}
            </td>
        </tr>
        <tr>
            <th>
                Track
            </th>
            <td>
                {{$student["track"]}}
            </td>
        </tr>
        <tr>
            <th>
                Level
            </th>
            <td>
                {{$student["level"]}}
            </td>
        </tr>
        <tr>
            <th>
                Created at
            </th>
            <td>
                {{$student["created_at"]}}
            </td>
        </tr>
        <tr>
            <th>
                Updated at
            </th>
            <td>
                {{$student["updated at"]}}
            </td>
        </tr>


    </table>



@endsection
