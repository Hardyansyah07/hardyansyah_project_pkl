
@extends('layouts.backend')
@section('content')
<br>
<form class="row g-3" method="POST" method="{{ route('user.update', $user->id) }}">
        @csrf
        @method('PATCH')
        <div class="">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Edit user {{ $user->name}}</h5>
                    <div class="col-md-12">
                        <label for="input13" class="form-label">Full Name</label>
                        <div class="position-relative input-icon">
                            <input type="text" name="name" class="form-control" id="input13"
                                @error('name') is-invalid @enderror" value="{{ $user->name }}" placeholder="Full Name">
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5"></i></span>
                                     @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="input16" class="form-label">Email</label>
                        <div class="position-relative input-icon">
                            <input type="text" name="email" class="form-control" @error('email') is-invalid @enderror" value="{{ $user->email }}"
                                id="input16" placeholder="Email">
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5"></i></span>
                                     @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                    </div>
                <div class="col-md-12">
						<label for="input19" class="form-label">Is Admin?</label>
                        <div class="col-md-12">
                            <div class="input-group">

							<select id="input19" name="is_admin" class="form-select">
                                    <option value="0" {{$user->is_admin == 0? 'selected' : ''}} >Tidak</option>
									<option value="1" {{$user->is_admin ? 'selected' : ''}}>Iya</option>
							</select>
                            </div>
                            </div>
									</div>
                                    <br>
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection
