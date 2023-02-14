@extends('layout.admin.master')

@section('content')
    <div class="flex flex-col">
        <div class="flex flex-row items-center justify-between mb-[1rem]">
            <form class="flex flex-row items-center justify-between">
                <input type="text" class="input_auth_username mb-[0] mr-[8px]" placeholder="Username">

                <button class="button-action rounded font-bold">
                    <span>
                        Search
                    </span>
                </button>
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        Full name
                    </td>
                    <td>
                        Email
                    </td>
                    <td>
                        Phone number
                    </td>
                    <td>
                        Date of Birth
                    </td>
                    <td>
                        Status
                    </td>
                    <td>
                        Action
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach($userList as $user)
                    <tr>
                        <td>
                            {{ $user->username }}
                        </td>
                        <td>
                            {{ $user->full_name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            {{ $user->phone_number }}
                        </td>
                        <td>
                            {{ $user->date_of_birth }}
                        </td>
                        <td class="uppercase">
                            {{ $user->statusUser->status_user }}
                        </td>
                        <td>
                            <div class="flex flex-col items-center justify-center">
                                <button class="btn btn-info">
                                    <span>
                                        Info
                                    </span>
                                </button>
                                @if($user->status == 1)
                                    <button class="btn btn-danger">
                                        <span>
                                            Disable
                                        </span>
                                    </button>
                                @else
                                    <button class="btn btn-edit">
                                        <span>
                                            Active
                                        </span>
                                    </button>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
