@extends('layouts.main')

@section('content')
    {{-- Author --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row d-flex justify-content-center">
        <div class="col-md-5 ms-5">
            <div class="card border shadow-lg mt-5">
                <h5 class="card-header">Author</h5>
                <div class="card-body">
                    <form action="{{ route('admin.author.add') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="floatingInput" value="{{ old('name') }}" autofocus>
                            <label for="floatingInput">Author</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-success col col-md-3" name="store"
                                value="submit"></input>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        {{-- publisher --}}
        <div class="col-md-5 ms-5">
            <div class="card border shadow-lg mt-5">
                <h5 class="card-header">Publisher</h5>
                <div class="card-body">
                    <form action="{{ route('admin.publisher.add') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="floatingInput" value="{{ old('name') }}" autofocus>
                            <label for="floatingInput">Publisher</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                                id="floatingInput" value="{{ old('address') }}" autofocus>
                            <label for="floatingInput">Address</label>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-success col col-md-3" name="store"
                                value="submit"></input>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
