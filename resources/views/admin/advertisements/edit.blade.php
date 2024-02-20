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
                        <a class="create__btn" href="{{ route('admin.advertisements.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.advertisements.update', $advertisement->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <strong> Photo 1</strong>
                        <input type="file" name="photo1"  class="form-control" ><br><br>
                        <img src="/files/photos/{{ $advertisement->photo1 }}" alt="" width="100px">

                        <strong>Photo 2</strong>
                        <input type="file" name="photo2" class="form-control"> 
                       
                       <br>

                        <strong>Link</strong>
                        <input type="url" name="link" value="{{ $advertisement->link }}" class="form-control"> <br><br>

                        <p>Status</p>
                        <select name="status"   value="{{ $advertisement->status }}" placeholder="Count of the watch">
                            <option value="1">Ko'rildi</option>
                            <option value="0">Ko'rilmadi</option>
                        </select><br><br>

                        <input type="submit" value="Submit"><br><br>
                     
                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection