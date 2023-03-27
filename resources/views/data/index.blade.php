<x-data.layout>
    <div class="row gy-2 gx-4">
        <div class="col-lg-6">
            <x-data.card title="Terverifikasi">
                {!! $data_true->container() !!}
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8">
                </script>
                {!! $data_true->script() !!}
            </x-data.card>
        </div>
        <div class="col-lg-6">
            <x-data.card title="Tidak Terverifikasi">
                {!! $data_false->container() !!}
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8">
                </script>
                {!! $data_false->script() !!}
            </x-data.card>
        </div>
    </div>
</x-data.layout>