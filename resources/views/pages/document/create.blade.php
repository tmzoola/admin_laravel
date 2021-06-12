@extends('layouts.app', ['page' => __('Media Upload '), 'pageSlug' => 'users', 'section' => 'users'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Media Upload') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('users.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="/files" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="title" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Title') }}" value="" required autofocus>
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Description') }}</label>
                                    <input type="text" name="description" id="input-name" class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}" value="" required autofocus>
                                    @include('alerts.feedback', ['field' => 'description'])
                                </div>
                                <div class="form-group{{ $errors->has('file') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('File') }}</label>
                                    <input type="file" name="file" placeholder="{{ __('File') }}" value="" >
                                    @include('alerts.feedback', ['field' => 'description'])
                                </div>

                                <select name="course_name_id" >
                                    @foreach($data as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
