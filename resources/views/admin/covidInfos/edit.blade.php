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
                        <a class="create__btn" href="{{ route('admin.covidInfos.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.covidInfos.update', $covidInfo->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong> Overall</strong>
                        <input type="number" name="overall" value="{{ $covidInfo->overall }}" class="form-control" ><br><br>

                        <strong>Healing</strong>
                        <input type="number" name="healing" value="{{ $covidInfo->healing }}" class="form-control"> <br><br>
                       <br>

                        <strong>Dead</strong>
                        <input type="number" name="dead" value="{{ $covidInfo->dead }}" class="form-control"> <br><br>

                        <input type="submit" value="Submit"><br><br>
                     
                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection