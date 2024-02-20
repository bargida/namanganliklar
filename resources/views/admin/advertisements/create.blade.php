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
                        <h3>Add info</h3>
                        <a class="create__btn" href="{{ route('admin.advertisements.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.advertisements.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <strong> Photo 1</strong>
                        <input type="file" name="photo1"  class="form-control" ><br><br>

                        <strong>Photo 2</strong>
                        <input type="file" name="photo2" class="form-control"> <br><br>
                       <br>

                        <strong>Link</strong>
                        <input type="url" name="link" class="form-control"> <br><br>

                        <p>adminShow</p>
                        <select name="status" placeholder="Count of the watch">
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