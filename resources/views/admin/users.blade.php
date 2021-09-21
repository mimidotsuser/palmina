<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('admin.users_page_title') }}
        </h2>
    </x-slot>


    <div class="container">

        <div class="py-12 ">
            <div class="col-md-10 mx-auto">
                <h5>{{__('admin.users_page_subtitle')}}</h5>

                <table class="table border bg-white table-hover">
                    <thead>
                    <tr>
                        <th>{{__('admin.table_no_header')}}</th>
                        <th>{{__('admin.table_name_header')}}</th>
                        <th>{{__('admin.table_email_header')}}</th>
                        <th>{{__('admin.table_phone_header')}}</th>
                        <th>{{__('admin.table_role_header')}}</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone_number}}</td>
                            <td>
                                @if($user->role ==='admin')
                                    <span class="text-success"> {{$user->role}}</span>
                            @else
                                {{$user->role}}
                            @endif
                            <td>

                                <a href="{{route('admin.users.show',$user)}}" class="btn btn-sm btn-primary">
                                    view more details
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</x-app-layout>


