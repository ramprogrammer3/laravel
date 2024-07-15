@php
    $fruits = ['apple','banana','orange','grapes'];
@endphp

@include('pages.header',['name'=>$fruits])

@includeWhen(false,'pages.header',['arr'=>$fruits])

@includeUnless(false,'pages.footer' )

<div class="container">
    <h2>This is home page </h2>
    <h3>Blade template in laravel</h3>
</div>
@include('pages.footer')

@includeIf('pages.content')

