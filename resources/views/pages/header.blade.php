<h1>header page </h1>
{{-- <p> {{$name}} </p> --}}

{{-- @foreach ($name as $key => $item)
    <p> {{$key}} =>  {{$item}} </p>
@endforeach --}}

@forelse ($name as $key => $item)
    <p> {{$key}} =>  {{$item}} </p>
@empty
    <p>No Value found here </p>
@endforelse