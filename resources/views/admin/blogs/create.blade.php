@extends('admin.layouts.layout')

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There is problem with your input<br><br>
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
                        <h3>Add blogs</h3>
                        <a class="create__btn" href="{{ route('admin.blogs.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <select name="category_id" id="" class="form-control">
                            <option value="">select</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select><br>
                        <strong>Title_uz</strong>
                        <input type="text" name="title_uz" class="form-control"> <br><br>
                       <br>

                        <strong>Title_ru</strong>
                        <input type="text" name="title_ru" class="form-control"> <br><br>

                        <strong>Photo</strong>
                        <input type="file" name="photo" class="form-control"> <br><br>

                        <strong>Mini_title_uz</strong>
                        <input type="text" name="mini_title_uz" class="form-control"> <br><br>
                       <br>

                        <strong>Mini_title_ru</strong>
                        <input type="text" name="mini_title_ru" class="form-control"> <br><br>


                        <strong>body_uz</strong>
                        <input type="text" name="body_uz" class="form-control"> <br><br>
                       <br>

                        <strong>body_ru</strong>
                        <input type="text" name="body_ru" class="form-control"> <br><br>

                        <strong>Views</strong>
                        <input type="number" name="views" class="form-control"> <br><br>

                    
                        <input type="submit" value="Submit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection