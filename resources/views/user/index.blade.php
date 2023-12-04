@extends("layouts")

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3 d-inline">Users Data</h6>
                    <a href="{{ url('/') }}/users/create" class="btn btn-sm btn-success float-end mx-5">Tambah</a>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Lahir</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No Hp</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            @if ($item->foto)
                                            <img src="{{ url('/') }}/images/{{ $item->foto }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            @else
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            @endif
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{ $item->nama }}</h6>
                                            <p class="text-xs text-secondary mb-0">{{ $item->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">11 Juni 1999</p>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">087721191226</span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{ url('/') }}/users/{{ $item->id }}/edit" class="btn btn-warning font-weight-bold btn-xs" data-toggle="tooltip" data-original-title="Edit user">Edit</a>
                                    <form action="{{ url('/') }}/users/{{ $item->id }}" method="POST" onsubmit="return confirm('Yakin Hapus User Ini?')">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Hapus user">Hapus</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
