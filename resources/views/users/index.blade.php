    @extends('layouts.app')
    @section('content')
        <div class="container">
            <h1>List of users</h1>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{route('users.create')}}"><button class="btn btn-primary me-md-2" type="button">User qo'shish</button></a>
            </div><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>T/R</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Tahrirlash</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td> {{($users->currentpage()-1) * $users->perpage() +   $loop->index+1 }}</td>
                            <td><a href="{{ route('users.show', $user) }}"> {{ $user->name }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td><a href="{{ route('users.edit', $user) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('users.destroy', ['user'=> $user->id])}}"  method = 'post'>
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    @endsection
