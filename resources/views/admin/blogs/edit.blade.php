@extends('admin.layouts.layout')

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Edit</h3>
                        <a class="create__btn" href="{{ route('admin.blogs.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.blogs.update', $message->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <select name="category_id" id="" class="form-control">
                            <option value="$blog->category_id">select</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select><br>
                        <strong> Title_uz</strong>
                        <input type="text" name="title_uz" value="{{ $blogs->title_uz }}" class="form-control"> <br><br>

                        <strong>Title_ru</strong>
                        <input type="text" name="title_uz" value="{{ $blogs->title_uz }}" class="form-control"> <br><br>

                        <strong>Photo</strong>
                        <input type="file" name="photo" value="{{ $blogs->photo }}" class="form-control"> <br><br>

                        <strong>Mini_title_uz</strong>
                        <input type="text" name="mini_title_uz" value="{{ $blogs->title_uz }}" class="form-control"> <br><br>

                        <strong>Mini_title_ru</strong>
                        <input type="text" name="mini_title_uz" value="{{ $blogs->title_uz }}" class="form-control"> <br><br>


                        <strong>Body_uz</strong>
                        <input type="text" name="title_uz" value="{{ $blogs->title_uz }}" class="form-control"> <br><br>

                        <strong>Body_ru</strong>
                        <input type="text" name="title_uz" value="{{ $blogs->title_uz }}" class="form-control"> <br><br>


                        <strong>Views</strong>
                        <input type="number" name="views" value="{{ $blogs->views }}" class="form-control"> <br><br>


                        <input type="submit" value="Submit"><br><br>
                     
                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection