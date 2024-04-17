@extends('layouts.app')
@section('main')
    <h1>This is user create page</h1>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <form method="post" action="{{ route('users.update', ['user'=> $user->id ]) }}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="user_name_input" class="form-label">Userning ismi</label>
                    <input type="text" id="product_name_input" class="form-control" placeholder="name" name="name" value="{{$user->name}}">
                    @error('name')
                    <span class="text-danger">* {{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="user_email_input" class="form-label">email</label>
                    <input type="text" id="product_price_input" class="form-control" placeholder="email kiritinng" name="email" value="{{$user->email}}">
                    @error('email')
                        <span class="text-danger">* {{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="users_password_input" class="form-label">password</label>
                    <input type="text" id="product_price_input" class="form-control" placeholder="email kiritinng" name="password" value="{{$user->password}}">
                    @error('password')
                        <span class="text-danger">* {{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="user_phone_input" class="form-label">phone</label>
                    <input type="text" id="product_price_input" class="form-control" name="phone" value="{{$user->phone}}">
                    @error('phone')
                        <span class="text-danger">* {{$message}}</span>
                    @enderror
                </div>
                <button type="submit" name="add" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection


