@extends('layouts.master')

@section('header')
    <header><img src="images/tituloprincipal.png"></header>
@stop

@section('content')
<br>
<br>
<br>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <ul class="navbar-nav">
    <div class="menu">
        <table>
            <tr>
              <th><a class="nav-link" href="{{route('pintor1')}}"><img src="images/botondiegovelazquez.png"></a></th>
              <th><a class="nav-link" href="{{route('pintor2')}}"><img src="images/botonmiguelangel.png"></a></th>
            </tr>

            <tr>
              <th><a class="nav-link" href="{{route('pintor3')}}"><img src="images/botonpicasso.png"></a></th>
              <th><a class="nav-link" href="{{route('pintor4')}}"><img src="images/botonclaudemonet.png"></a></th>
            </tr>
          </table>
    </div><br>
</nav>
@stop

@section('footer')
@parent
@show