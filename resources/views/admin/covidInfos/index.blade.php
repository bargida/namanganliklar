@extends('admin.layouts.layout')

@section('content')
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Covid Infos</h3>
                    <a class="create__btn" href="{{ route('admin.covidInfos.create') }}"> <i class='bx bxs-folder-plus'></i>Create</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Overall</th>
                            <th>Healing</th>
                            <th>Dead</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($covidInfos) == 0)
                            <tr>
                                <td colspan="5" class="h5 text-center text-muted">There isn't any information</td>
                            </tr>
                        @endif
                        @foreach ($covidInfos as $item)
                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td>{{ $item->overall }}</td>
                                <td>{{ $item->healing }}</td>
                                <td>{{ $item->dead }}</td>
                                <td>
                                    <form action="{{ route('admin.covidInfos.destroy', $item->id) }}" method="POST">

                                        <a class="btn btn-primary" href="{{ route('admin.covidInfos.show', $item->id) }}"> <ion-icon name = "eye-outline"></ion-icon></a>
                                            
                                        <a class="btn btn-primary" href="{{ route('admin.covidInfos.edit', $item->id) }}"> <ion-icon name = "create-outline"></ion-icon></a>
            

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