@extends('base')

@section('cuerpo')

<h1>Este es el equipo de trabajo</h1>
@foreach($equipo as $e)
<a href="{{route('nosotros',$e)}}">{{$e}}</a><br>
@endforeach


@if(!empty($nombre))

@switch($nombre)
  @case($nombre=='Jairo')
  <h2>El nombre es {{$nombre}}:</h2>
  <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consequuntur eum commodi rem, velit praesentium, officia similique modi iste asperiores porro nihil quidem voluptas quae ducimus! Minima enim deleniti obcaecati!</p>
    @break
    @case($nombre=='Matias')
  <h2>El nombre es {{$nombre}}:</h2>
  <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consequuntur eum commodi rem, velit praesentium, officia similique modi iste asperiores porro nihil quidem voluptas quae ducimus! Minima enim deleniti obcaecati!</p>
    @break
    @case($nombre=='Carlos')
  <h2>El nombre es {{$nombre}}:</h2>
  <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consequuntur eum commodi rem, velit praesentium, officia similique modi iste asperiores porro nihil quidem voluptas quae ducimus! Minima enim deleniti obcaecati!</p>
    @break

@endswitch



@endif








@endsection