@extends('admin.layouts.layout')

@section('categories')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Show Categories</h3>
                    <a class="create__btn" href="{{ route('admin.users.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                </div>

            </div>

            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                        <tr>
                                <td>
                                    <p>Name : </p>
                                </td>
                                <td><b>{{ $user->name }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Email : </p>
                                </td>
                                <td><b>{{ $user->email }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Password : </p>
                                </td>
                                <td><b>{{ $user->password }}</b></td>
                            </tr>
                            
                      
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection