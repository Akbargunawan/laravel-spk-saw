<x-app-layout>

    <x-slot name="title">
        Add Kriterias
    </x-slot>

   <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Kriterias
                        <a href="{{url('kriterias')}}"class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">
                        <form action="{{url ('kriterias/create')}}"method="POST">
                            @csrf

                            <div class="mb-3">
                <label for="kode_kriteria" class="form-label">Kode Kriteria</label>
                <input type="text" class="form-control" id="kode_kriteria" name="kode_kriteria" value="{{ old('kode_kriteria') }}" required>
                @error('kode_kriteria') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            
            <div class="mb-3">
                <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" value="{{ old('nama_kriteria') }}" required>
                @error('nama_kriteria') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            
            <div class="mb-3">
                <label for="bobot" class="form-label">Bobot</label>
                <input type="number" class="form-control" id="bobot" name="bobot" value="{{ old('bobot') }}" required>
                @error('bobot') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="" selected disabled>Pilih Status</option>
                    <option value="BENEFIT" {{ old('status') == 'BENEFIT' ? 'selected' : '' }}>BENEFIT</option>
                    <option value="COST" {{ old('status') == 'COST' ? 'selected' : '' }}>COST</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>

                        </form>
                </div>
            </div>
        </div>
    </div>
   </div>

</x-app-layout>
