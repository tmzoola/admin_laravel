@extends('layouts.app', ['page' => __('User Management'), 'pageSlug' => 'users', 'section' => 'users'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Course Assignment') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    @if(isset($task))
                        <h1>Assignment Already been created</h1>
                        @else
                            <form method="post" action="{{ route('course_task') }}" autocomplete="off">
                                @csrf

                                <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>
                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Title') }}</label>
                                        <input type="text" name="title" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('title') }}" value="{{ old('name') }}" required autofocus>
                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <input type="text" name="video_id" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('title') }}" value="{{$video_id}}" required autofocus hidden>

                                    <label class="form-control-label" for="input-email">{{ __('Content') }}</label>
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <textarea name="content_new" class="" rows="10" cols="200"></textarea>
                                        @include('alerts.feedback', ['field' => 'email'])
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </form>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
