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
                        <h3>Add category</h3>
                        <a class="create__btn" href="{{ route('admin.users.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <strong>Name</strong>
                    <input type="text" name="name" placeholder="Enter your name" class="form-control"> <br><br>

                    <strong>Email</strong>
                    <input type="email" name="email"  placeholder="Enter your email"  class="form-control"> <br><br>

                    <strong>Password</strong>
                    <input type="password" name="password"  placeholder="Enter your password"  class="form-control"> <br><br>
                    
                        <input type="submit" value="Submit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection