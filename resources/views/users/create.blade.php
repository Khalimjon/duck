@extends('layouts.app')
@section('content')
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
            <form method="post" action="{{ route('users.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="category_name_input" class="form-label">Userning ismi</label>
                    <input type="text" id="product_name_input" class="form-control" placeholder="name" name="name" value="{{old('name')}}">
                    @error('name')
                    <span class="text-danger">* {{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category_price_input" class="form-label">email</label>
                    <input type="text" id="product_price_input" class="form-control" placeholder="email kiritinng" name="email" value="{{old('email')}}">
                    @error('email')
                        <span class="text-danger">* {{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category_price_input" class="form-label">password</label>
                    <input type="text" id="product_price_input" class="form-control" placeholder="password" name="password" value="{{old('password')}}">
                    @error('password')
                        <span class="text-danger">* {{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category_price_input" class="form-label">photo</label>
                    <input type="text" id="product_price_input" class="form-control" placeholder="telefon raqaomini kiritinng" name="phone" value="{{old('phone')}}">
                    @error('phone')
                        <span class="text-danger">* {{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" name="add" class="btn btn-primary">Submit</button>
                </div>
            </form>
    </div>
@endsection

