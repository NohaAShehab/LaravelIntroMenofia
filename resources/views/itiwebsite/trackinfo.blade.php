@extends("itiwebsite.ititemp")


    @section('content')

        <h1> Track info </h2>

        <table border=2>
            @foreach($data as $key=>$value)

                @if($value=="Python")
                    test
                @endif
                <br>
                @unless($value=="Python")

                     val = {{$value}}
                @endunless

                <tr> <td>
                {{$key}} </td> <td> {{$value}}  </td> </tr>

            @endforeach

        </table>


        <br> <br>

        @forelse($data as $key)

            {{$key}} 

        @empty

            <h5> No items</h5>

        @endforelse

        <br> <br>

        @foreach($data as $key)

            @if($loop->index==1)
                @exit
            @endif
            {{$key}}
            <br>
        @endforeach


        {{-- 
            <h2> End of script </h2>
        --}}

        {{-- {{$data}} --}}


    @endsection