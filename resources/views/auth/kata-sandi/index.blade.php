<x-data.layout>
    <x-data.card title="{{ $title }}">
        @slot('button')
        <div class="card-actions">
            <a href="{{ route($route) }}" class="btn btn-secondary">
                Kembali
            </a>
        </div>
        @endslot
        <form method="post" action="{{ route('kata-sandi.update', auth()->user()->nama_pengguna) }}">
            @method('put')
            @csrf
            <input type="hidden" class="form-control" name="route" value="{{ $route }}">
            @include('auth/kata-sandi/_form')
        </form>
    </x-data.card>
</x-data.layout>