@extends('layouts.master')
@section('title', 'Poets')

    @section('header')
        <br>
            <h1>Circle Poets</h1>
        <br>
    @stop

    @section('navbar')
    @stop

    @section('content')
    <div>
    <a href="{{action('Crud@create')}}">create</a>
    </div>
    <table class="table table-hover table-dark">
    <br>
    <thead>
        <tr>
        <th scope="col">poetcode</th>
        <th scope="col">firstname</th>
        <th scope="col">surname</th>
        <th scope="col">adress</th>
        <th scope="col">postcode</th>
        <th scope="col">telephonenumber</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Poets as $Poets)
            <tr>
            <th scope="row">{{$Poets->poetcode}}</th>
            <td>{{$Poets->firstname}}</td>
            <td>{{$Poets->surname}}</td>
            <td>{{$Poets->adress}}</td>
            <td>{{$Poets->postcode}}</td>
            <td>{{$Poets->telephonenumber}}</td>
            <td><a href="{{action('Crud@show', ['id'=>$Poets->poetcode])}}">Show</a></td>
            <td><a href="{{action('Crud@destroy', ['id'=>$Poets->poetcode])}}">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>
    @stop

    @section('footer')
        @parent
    @stop