@extends('layouts.master')

@if(isset($Poets) and is_object ($Poets))
    @php
        $title='Modification';
        $id = $Poets->poetcode;
        $poetcode = $Poets->poetcode;
        $firstname = $Poets->firstname;
        $surname = $Poets->surname;
        $adress = $Poets->adress;
        $postcode = $Poets->postcode;
        $telephonenumber = $Poets->telephonenumber;
    @endphp
@else
    @php
        $title='Add';
        $id = '';
        $poetcode = '';
        $firstname = '';
        $surname = '';
        $adress = '';
        $postcode = '';
        $telephonenumber = '';
    @endphp
@endif

@section('title', 'Poets')

    @section('header')
        <br>
            {{$title}}
        <br>
    @stop

    @section('navbar')
    @stop

    @section('content')
    <form action="{{isset($Poets) ? action('Crud@update') :action('Crud@store')}}" method="post">
    {{csrf_field()}}
    @if(isset($Poets) and is_object ($Poets))
            <input type="hidden" name="id" value="{{$id}}">
        @endif
            <label for="poetcode">poetcode</label>
            <input type="text" name="poetcode" placeholder="Add Information...">
            <br>
            <label for="firstname">firstname</label>
            <input type="text" name="firstname" placeholder="Add Information...">
            <br>
            <label for="surname">surname</label>
            <input type="text" name="surname" placeholder="Add Information...">
            <br>
            <label for="adress">adress</label>
            <input type="text" name="adress" placeholder="Add Information...">
            <br>
            <label for="postcode">postcode</label>
            <input type="text" name="postcode" placeholder="Add Information...">
            <br>
            <label for="telephonenumber">telephonenumber</label>
            <input type="text" name="telephonenumber" placeholder="Add Information...">
            <br><br>
            <input type="submit" value="SUBMIT" id="boton">
    </form>
    @stop

    @section('footer')
        @parent
    @stop