<x-app-layout>
    <x-slot name="header">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">{{__('admin.users_page_subtitle')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$user->name}}</li>
            </ol>
        </nav>
    </x-slot>


    <div class="container">

        <div class="py-12 ">
            <div class="col-md-5 mx-auto">
                <h5>{{__('admin.user_page_subtitle')}}</h5>
                <table class="table border table-hover bg-white">
                    <tbody>
                    <tr>
                        <th>{{__('admin.table_no_header')}}</th>
                        <td> {{$user->name}}</td>
                    </tr>
                    <tr>
                        <th>{{__('admin.table_role_header')}}</th>
                        <td><span class="badge badge-success"> {{$user->role}}</span>
                        </td>
                    </tr>
                    <tr>
                        <th>{{__('admin.table_email_header')}}</th>
                        <td> {{$user->email}}</td>
                    </tr>
                    <tr>
                        <th>{{__('admin.table_phone_header')}}</th>
                        <td> {{$user->phone_number}}</td>
                    </tr>
                    <tr>
                        <th>{{__('admin.table_created_on_header')}}</th>
                        <td> {{$user->created_at}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>


