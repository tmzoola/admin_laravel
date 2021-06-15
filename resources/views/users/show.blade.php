@extends('layouts.app', ['page' => __('Course List'), 'pageSlug' => 'users', 'section' => 'users'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('List of the courses') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                            <th scope="col">{{ __('#') }}</th>
                            <th scope="col">{{ __('Name') }}</th>
                            <th scope="col">{{ __('Email') }}</th>
                            <th scope="col"></th>
                            </thead>
                            <tbody>
                            @if($count != 0)
                                @foreach ($members as $key=>$member)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$member->name}}</td>
                                        <td>{{$member->email}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{--                        {{ $users->links() }}--}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
