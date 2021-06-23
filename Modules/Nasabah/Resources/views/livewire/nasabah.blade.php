{{-- livewire view --}}
<div>

    @if ($create)
        @include('nasabah::livewire.create')
    @elseif ($update)
        @include('nasabah::livewire.update')
    @else
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-sub">
                            This is the basic table view of the ready dashboard :
                        </div>
                        <button wire:click="create" class="btn btn-primary">Create data</button>
                        <br />
                        <div wire:loading wire:target="create">
                            Loading form silahkan tunggu ...
                        </div>
                        <br />
                        <button wire:click="update" class="btn btn-info">UPDATE data</button>
                        <br />
                        <div wire:loading wire:target="update">
                            Loading form silahkan tunggu ...
                        </div>
                        <br />
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">KTP</th>
                                    <th scope="col">Pekerjaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tmnasabah as $tmnasabas)

                                    <tr>
                                        <th scope="col">{{ $tmnasabas->nama_sesuai_ktp }}</th>
                                        <th scope="col">{{ $tmnasabas->nama_sesuai_ktp }}</th>
                                        <th scope="col">{{ $tmnasabas->no_ktp }}</th>
                                        <th scope="col">{{ $tmnasabas->pekerjaan_ktp }}</th>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    @endif

</div>
