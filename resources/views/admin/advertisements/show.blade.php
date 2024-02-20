@extends('admin.layouts.layout')

@section('Advertisements')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Show Advertisements</h3>
                    <a class="create__btn" href="{{ route('admin.advertisements.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <p>Photo 1 : </p>
                                </td>
                                <td><img src="/files/photos/{{ $item->photo }}" alt="" width="100px"></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Photo 2 : </p>
                                </td>
                                <td><img src="/files/photos/{{ $item->photo }}" alt="" width="100px"></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Link : </p>
                                </td>
                                <td><b>{{ $advertisement->link }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Status : </p>
                                </td>
                                <td><b>{{ $advertisement->status }}</b></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection