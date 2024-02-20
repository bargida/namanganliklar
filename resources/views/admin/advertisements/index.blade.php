@extends('admin.layouts.layout')

@section('content')
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Advertisements</h3>
                    <a class="create__btn" href="{{ route('admin.advertisements.create') }}"> <i class='bx bxs-folder-plus'></i>Create</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Photo 1</th>
                            <th>Photo 2</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($advertisements) == 0)
                            <tr>
                                <td colspan="5" class="h5 text-center text-muted">There isn't any information</td>
                            </tr>
                        @endif
                        @foreach ($advertisements as $item)
                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td><img src="/files/photos/{{ $item->photo1 }}" alt="" width="100px"></td>
                                <td><img src="/files/photos/{{ $item->photo2 }}" alt="" width="100px"></td>
                               
                                <td>{{ $item->link }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <form action="{{ route('admin.advertisements.destroy', $item->id) }}" method="POST">

                                        <a class="btn btn-primary" href="{{ route('admin.advertisements.show', $item->id) }}"> <ion-icon name = "eye-outline"></ion-icon></a>
                                            
                                        <a class="btn btn-primary" href="{{ route('admin.advertisements.edit', $item->id) }}"> <ion-icon name = "create-outline"></ion-icon></a>
            

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