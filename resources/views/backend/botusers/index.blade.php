@extends('layouts.app')

@section('title', 'List of posts - javokhir-media.uz')

@section('content')
<h2 class="text-center p-3">Posts</h2>
<div class="mt-4"></div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>№</th>
            <th>UserID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Region</th>
            <th>District</th>
            <th>Phone Number</th>
            <th>Status</th>
            <th>Last Command</th>
            <th>Created AT</th>
            <th>Last Update</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
        <tr>
            <td>{{ (($users->currentpage()-1) * $users->perpage() + ($loop->index+1)) }}</td>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->region }}</td>
            <td>{{ $user->district }}</td>
            <td>{{ $user->phone_number }}</td>
            <td>{{ $user->status }}</td>
            <td>{{ $user->last_command }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
{{--            <td><a href="{{ url('/').'/'.$id->id }}" target="_blank" class="text-decoration-none">{{ $post->title }}</a></td>--}}
            <td>
                <form action="{{ route('botusers.destroy', ['id' => $user->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('botusers.show', ['id'=>$user->id]) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('botusers.edit', ['id'=>$user->id]) }}" class="btn btn-success btn-sm">
                        <i class="far fa-edit"></i>
                    </a>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td></td>
            <td>Hech narsa topilmadi</td>
            <td>Hech narsa topilmadi</td>
            <td>Hech narsa topilmadi</td>
            <td>Hech narsa topilmadi</td>
            <td>Hech narsa topilmadi</td>
            <td>Hech narsa topilmadi</td>
            <td>Hech narsa topilmadi</td>
            <td>Hech narsa topilmadi</td>
            <td>Hech narsa topilmadi</td>
            <td>Hech narsa topilmadi</td>

        </tr>
        @endforelse
    </tbody>
</table>

{{ $users->links() }}
@endsection
