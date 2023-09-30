@php
    $user = "ashutosh";
    $fruits=['mango','orange'];
@endphp

@foreach ($fruits as $key => $value )
     {{$key}} {{'-'}} {{$value}} <br>
    
@endforeach

{{-- <script> --}}
    {{-- // var data = @json($fruits);
    // console.log(data); --}}

    {{-- var a = "radhe";
  
</script> --}}