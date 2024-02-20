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
                        <h3>Add Product</h3>
                        <a class="create__btn" href="{{ route('admin.comments.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.comments.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <strong> Blog_id</strong>
                        <input type="id" name="blog_id" class="form-control" ><br><br>

                        <strong>Name</strong>
                        <input type="name" name="name" class="form-control"> <br><br>
                       <br>

                        <strong>Message</strong>
                        <input type="text" name="message" class="form-control"> <br><br>

                        <strong>Rating</strong>
                        <input type="number
                    " name="message" class="form-control"> <br><br>

                        <p>adminShow</p>
                        <select name="adminShow" placeholder="Count of the watch">
                            <option value="1">Ko'rildi</option>
                            <option value="0">Ko'rilmadi</option>
                        </select><br><br>

                        <input type="submit" value="Submit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection