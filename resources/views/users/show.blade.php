@extends('layouts.app')
@section('main')
    <h1>Users information</h1>
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <tr>
                    <td>Name</td>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <td>phone number</td>
                    <td>{{$user->phone}}</td>
                </tr>
                <tr>
                    <td>joined date</td>
                    <td>{{$user->created_at}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection



