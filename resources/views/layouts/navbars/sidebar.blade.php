<div class="sidebar">
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('admin') }}">
                    <i class="tim-icons icon-chart-bar-32"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li>
                <a data-toggle="collapse" href="#users" {{ $section == 'users' ? 'aria-expanded=true' : '' }}>
                    <i class="tim-icons icon-badge" ></i>
                    <span class="nav-link-text">Users</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse {{ $section == 'users' ? 'aria-expanded=true' : '' }}" id="users">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-badge"></i>
                                <p>My profile</p>
                            </a>
                        </li>

                        <li @if ($pageSlug == 'users-list') class="active " @endif>
                            <a href="{{ route('users.index')  }}">
                                <i class="tim-icons icon-notes"></i>
                                <p>Manage Users</p>
                            </a>
                        </li>

                        <li @if ($pageSlug == 'users-create') class="active " @endif>
                            <a href="{{ route('users.create')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>New user</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#media" {{ $section == 'users' ? 'aria-expanded=true' : '' }}>
                    <i class="tim-icons icon-camera-18" ></i>
                    <span class="nav-link-text">Media</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse {{ $section == 'users' ? 'aria-expanded=true' : '' }}" id="media">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('course_name')  }}">
                                <i class="tim-icons icon-simple-add"></i>
                                <p>New Course </p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('video_upload')  }}">
                                <i class="tim-icons icon-triangle-right-17"></i>
                                <p>Video upload</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
