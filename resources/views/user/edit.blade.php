@extends("layouts")

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Tambah Data User</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-5">
                    <form role="form" method="POST" action="{{ url('/') }}/users/{{ $user->id }}" class="text-start" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="my-3">
                            <label class="form-label">Nama</label>
                            <div class="input-group input-group-outline">
                                <input type="text" value="{{ $user->nama }}" name="nama" class="form-control" required>
                            </div>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Email</label>
                            <div class="input-group input-group-outline">
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ganti Password</label>
                            <div class="input-group input-group-outline">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="my-3">
                            <label class="form-label">No Handphone</label>
                            <div class="input-group input-group-outline">
                                <input type="number" name="no_hp" value="{{ $user->no_hp }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <div class="input-group input-group-outline">
                                <input type="date" name="tgl_lahir" value="{{ $user->tgl_lahir }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Role</label>
                            <div class="form-check">
                                <input class="form-check-input" value="admin" @if($user->role == 'admin') checked @endif type="radio" name="role" id="flexRadioDefault1" required>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Admin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="user" @if($user->role == 'user') checked @endif type="radio" name="role" id="flexRadioDefault2" required>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    User
                                </label>
                            </div>
                        </div>
                        <div class="my-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" value="laki-laki" type="radio"@if($user->jenis_kelamin == 'laki-laki') checked @endif name="jenis_kelamin" id="jenkelLaki" required>
                                <label class="form-check-label" for="jenkelLaki">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="perempuan" type="radio" @if($user->jenis_kelamin == 'perempuan') checked @endif name="jenis_kelamin" id="jenkelPerempuan" required>
                                <label class="form-check-label" for="jenkelPerempuan">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="my-3">
                            <label class="form-label">No KTP</label>
                            <div class="input-group input-group-outline">
                                <input type="number" name="no_ktp" class="form-control" value="{{ $user->no_ktp }}" required>
                            </div>
                        </div>
                        <div class="my-3">
                            <label class="form-label d-block">Foto</label>
                            @if ($user->foto)
                            <img src="{{ url('/') }}/images/{{ $user->foto }}" style="height: 100px" alt="user1" />
                            @endif
                            <div class="input-group input-group-outline">
                                <input type="file" name="foto" class="form-control">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
