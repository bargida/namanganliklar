@extends('admin.layouts.layout')

@section('messages')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Show Comments</h3>
                    <a class="create__btn" href="{{ route('admin.comments.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Name : </p>
                                </td>
                                <td><b>{{ $comments->name }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Blog_id : </p>
                                </td>
                                <td><b>{{ $comments->blog_id }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Name : </p>
                                </td>
                                <td><b>{{ $comments->name }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Message : </p>
                                </td>
                                <td><b>{{ $comments->message }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Rating : </p>
                                </td>
                                <td><b>{{ $comments->rating }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>AdminShow : </p>
                                </td>
                                <td><b>{{ $message->adminShow }}</b></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection