@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Pendaftaran') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Provinsi') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="provinces" id="provinces">
                                    <option value="0" disabled="true" selected="true">--Pilih Provinsi--</option>
                                    @foreach ($provinces as $key => $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                                        
                                    @endforeach
                                </select>

                                @error('provinces')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Kabupaten / Kota') }}</label>

                            <div class="col-md-6">
                                    <select class="form-control" name="regencies" id="regencies">
                                            <option value="0" disabled="true" selected="true">--Pilih Kabupaten/Kota--</option>
                                    </select>

                                @error('regencies')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Kecamatan') }}</label>

                            <div class="col-md-6">
                                    <select class="form-control" name="districts" id="districts">
                                            <option value="0" disabled="true" selected="true">--Pilih Kecamatan--</option>
                                    </select>

                                @error('districts')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Desa / Kelurahan') }}</label>

                            <div class="col-md-6">
                                    <select class="form-control" name="villages" id="villages">
                                            <option value="0" disabled="true" selected="true">--Pilih Desa/Kelurahan--</option>
                                    </select>

                                @error('villages')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_hp" class="col-md-4 col-form-label text-md-right">{{ __('No. Hanphone') }}</label>

                            <div class="col-md-6">
                                <input id="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus>

                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <br>
                        <label for="Daftar">* Dengan mendaftar, Anda telah membaca dan menyetujui <a href="" >Syarat & Ketentuan</a> dan <a href="" >Pembebasan Tanggung Jawab</a>.</label>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                        <br>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <label for="Daftar">Sudah punya Akun ?</label>
                            <br>
                            <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
