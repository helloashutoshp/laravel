{{-- <h1>hlw guys</h1>
{{$name}} --}}

{{-- @unless ($name == 'ashu')

{{'incorrect name'}}
    
@endunless --}}

{{-- @isset($name)
   @for ($i = 1; $i < 10; $i++)
       <h1>{{$name}}</h1>
   @endfor
@endisset --}}

{{-- 
{{$naam}}
{{!empty($place)?$place : "no city "}}
{{$alpha}} --}}


@foreach ($arr as $key => $value)
   {{$key}} {{$value['name']}} | {{$value['age']}} | {{$value['phone']}}
   <a href="{{route('sh',$key)}}" class="hr">Show</a>
   <br><br>


@endforeach