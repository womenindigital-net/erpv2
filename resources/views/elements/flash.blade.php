@inject('session', '\Illuminate\Support\Facades\Session')
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if ($session::has($msg))
        {{-- @dump($msg) --}}
        <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
            <strong>{{ ucfirst($msg) }}!</strong> {{ $session::get($msg, 'Operation Successful') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endforeach
