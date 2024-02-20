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
                    <h3> Show Blogs</h3>
                    <a class="create__btn" href="{{ route('admin.blogs.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Category_id : </p>
                                </td>
                                <td><b>{{ $blogs->category_id }}</b></td>
                            </tr><br>

                            <tr>
                                <td>
                                    <p>title_uz : </p>
                                </td>
                                <td><b>{{ $blogs->title_uz }}</b></td>
                            </tr><br>
                            <tr>
                                <td>
                                    <p>title_ru: </p>
                                </td>
                                <td><b>{{ $blogs->title_ru }}</b></td>
                            </tr><br>
                            <tr>
                                <td>
                                    <p>photo : </p>
                                </td>
                                <td><b>{{ $blogs->photo }}</b></td>
                            </tr><br>
                            <tr>
                                <td>
                                    <p>body_uz : </p>
                                </td>
                                <td><b>{{ $blogs->body_uz }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>body_ru: </p>
                                </td>
                                <td><b>{{ $blogs->body_ru }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Views : </p>
                                </td>
                                <td><b>{{ $blogs->views }}</b></td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection