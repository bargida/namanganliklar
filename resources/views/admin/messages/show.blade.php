@extends('admin.layouts.layout')

@section('messages')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Show Messages</h3>
                    <a class="create__btn" href="{{ route('admin.messages.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

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
                                <td><b>{{ $message->name }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Email : </p>
                                </td>
                                <td><b>{{ $message->email }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Subject : </p>
                                </td>
                                <td><b>{{ $message->subject }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Message : </p>
                                </td>
                                <td><b>{{ $message->message }}</b></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>AdminShow : </p>
                                </td>
                                <td><b>{{ $message->adminShow }}</b></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection