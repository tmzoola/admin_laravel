@extends('layouts.app', ['page' => __('Video List'), 'pageSlug' => 'users', 'section' => 'users'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('List of videos') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                            <th scope="col">{{ __('#') }}</th>
                            <th scope="col">{{ __('Title') }}</th>
                            <th scope="col">{{ __('Description') }}</th>
                            <th scope="col">{{ __('Members') }}</th>
                            <th scope="col"></th>
                            </thead>
                            <tbody>
                            @foreach ($videos as $key=>$course)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$course->title}}</td>
                                    <td>{{$course->description}}</td>
                                    <td><a href="/admin/create/{{$course->id}}" class="btn btn-success">Create Task</a></td>
                                </tr>
                            @endforeach
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

