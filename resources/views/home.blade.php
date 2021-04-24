@isset(auth()->user()->account_id)
    @if(auth()->user()->account_id == 1)
        @include('pages.home_public')
    @elseif(auth()->user()->account_id == 2)
        @include('pages.home_public')
    @elseif(auth()->user()->account_id == 3)
        @include('pages.kids_main')
    @endif
@else
    @include('pages.home_public')
@endisset
















