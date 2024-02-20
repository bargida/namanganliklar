@extends('admin.layouts.layout')

@section('content')
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Blogs</h3>
                    <a class="create__btn" href="{{ route('admin.blogs.create') }}"> <i class='bx bxs-folder-plus'></i>Create</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Category_id</th>
                            <th>title_uz</th>
                            <th>title_ru</th>
                            <th>photo</th>
                            <th>mini_title_uz</th>
                            <th>mini_title_ru</th>
                            <th>body_uz</th>
                            <th>body_ru</th>
                            <th>Views</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach ($blogs as $item)
                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td>{{ $item->category_id }}</td>
                                <td>{{ $item->title_uz }}</td>
                                <td>{{ $item->title_ru }}</td>
                                <td><img src="/files/photos/{{ $item->photo }}" alt="" width="100px"></td>
                                <td>{{ $item->mini_title_uz }}</td>
                                <td>{{ $item->mini_title_ru }}</td>
                                <td>{{ $item->views }}</td>
                                <td>{{ $item->adminShow }}</td>
                                <td>
                                    <form action="{{ route('admin.blogs.destroy', $item->id) }}" method="POST">

                                        <a class="btn btn-primary" href="{{ route('admin.blogs.show', $item->id) }}"> <ion-icon name = "eye-outline"></ion-icon></a>
                                            
                                        <a class="btn btn-primary" href="{{ route('admin.blogs.edit', $item->id) }}"> <ion-icon name = "create-outline"></ion-icon></a>
            

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