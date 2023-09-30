@php
   $fruits = ['mango','apple','banana']; 
@endphp

<ul>
    @foreach ($fruits as $fr )

    <li>{{$fr}}</li>
        
    @endforeach
</ul>