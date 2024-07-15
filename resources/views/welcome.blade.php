<div class="container">
    <h2>This is home page </h2>
    <h3>Blade template in laravel</h3>
</div>

{{ 10 + 5 }}

{{ 'Ram kumar maniyari' }}
<br><br>
{!! '<h1>Ram kumar maniyari sitamarhi</h1>' !!}

{{-- {!! "<script>alert('ram kumar')</script>"!!} --}}


{{-- {{$user}} --}}

@php
    $userName = 'Piku kumar';
    $arr = ['ram', 'rohan', 'kavita', 'sarita', 'savita', 'babita'];
@endphp

{{ "User name is $userName" }}
<br><br>
<ul>
    @foreach ($arr as $name)
        @if ($loop->even)
            <li style="color:red">{{ $loop->index }} {{ $name }} </li>
        @else
            <li style="color:blue">{{ $loop->index }} {{ $name }} </li>
        @endif
    @endforeach
</ul>

@{{ $userName }}

@@if()
