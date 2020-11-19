@extends("itiwebsite.ititemp")


    @section('innersection')
        this is inner section

        <ul>
        @foreach($students as $student)

             <li> {{$student}}  </li>

        @endforeach

        </ul>
    @endsection
