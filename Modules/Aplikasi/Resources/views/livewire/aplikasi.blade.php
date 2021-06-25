<div>
    {{-- livewire view --}}
    <div class="section-header">
        <h1>Advanced Forms</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Forms</a></div>
            <div class="breadcrumb-item">Advanced Forms</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Advanced Table</h4>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search"
                                        wire:model.debounce.300ms="search">

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>

                                        <th>No.</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Permision</th>
                                        <th>Route </th>
                                        <th>Created By</th>
                                </thead>
                                <tbody>
                                    @php
                                        $j = 1;
                                    @endphp
                                    @if (count($aplikasi) > 0):

                                        @foreach ($aplikasi as $aplikasis)
                                            <tr>
                                                <td> {{ $j }}</td>
                                                <td>{{ $aplikasis['kode'] }} </td>
                                                <td>{{ $aplikasis['nama'] }} </td>
                                                <td>{{ $aplikasis['permision'] }} </td>
                                                <td>{{ $aplikasis['route '] }} </td>
                                                <td>{{ $aplikasis['users_id'] }} </td>
                                            </tr>
                                            @php
                                                $j++;
                                            @endphp
                                        @endforeach

                                    @else
                                        <tr>
                                            <td colspan="6">
                                                Maaf data tidak di temukan
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        {!! $aplikasi->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
