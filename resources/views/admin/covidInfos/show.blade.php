@extends('admin.layouts.layout')

@section('covidInfos')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Show Messages</h3>
                    <a class="create__btn" href="{{ route('admin.covidInfos.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <p>Overall : </p>
                                </td>
                                <td><b>{{ $covidInfo->overall }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Healing : </p>
                                </td>
                                <td><b>{{ $covidInfo->healing }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Dead : </p>
                                </td>
                                <td><b>{{ $covidInfo->dead }}</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection