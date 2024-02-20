@extends('admin.layouts.layout')

@section('content')
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Comments</h3>
                    <a class="create__btn" href="{{ route('admin.comments.create') }}"> <i class='bx bxs-folder-plus'></i>Create</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Blog_id</th>
                            <th>Name</th>
                            <th>Message</th>
                            <th>Rating</th>
                            <th>adminShow</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($comments) == 0)
                            <tr>
                                <td colspan="5" class="h5 text-center text-muted">There isn't any information</td>
                            </tr>
                        @endif
                        @foreach ($comments as $item)
                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td>{{ $item->blog_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->message }}</td>
                                <td>{{ $item->adminShow }}</td>
                                <td>
                                    <form action="{{ route('admin.comments.destroy', $item->id) }}" method="POST">

                                        <a class="btn btn-primary" href="{{ route('admin.comments.show', $item->id) }}"> <ion-icon name = "eye-outline"></ion-icon></a>
                                            
                                        <a class="btn btn-primary" href="{{ route('admin.comments.edit', $item->id) }}"> <ion-icon name = "create-outline"></ion-icon></a>
            

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Delete ?')"><ion-icon
                                                name="trash-outline"></ion-icon></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection