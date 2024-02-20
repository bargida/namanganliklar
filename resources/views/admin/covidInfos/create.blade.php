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
                        <a class="create__btn" href="{{ route('admin.covidInfos.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.covidInfos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <strong> Overall</strong>
                        <input type="number" name="overall" class="form-control" ><br><br>

                        <strong>Healing</strong>
                        <input type="number" name="healing" class="form-control"> <br><br>
                       <br>

                        <strong>Dead</strong>
                        <input type="number" name="dead" class="form-control"> <br><br>

                        <input type="submit" value="Submit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection