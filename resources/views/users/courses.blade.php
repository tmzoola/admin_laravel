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
                            <th scope="col">{{ __('Creation Date') }}</th>
                            <th scope="col">{{ __('Members') }}</th>
                            <th scope="col"></th>
                            </thead>
                            <tbody>
                            @foreach ($courses as $key=>$course)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td><a href="/course/videos_list/{{$course->id}}">{{$course->name}}</a></td>
                                    <td>{{$course->created_at}}</td>
                                    <td><a href="/admin/courses/{{$course->id}}"><i class="tim-icons icon-alert-circle-exc"></i></a></td>
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
