<x-app-layout>

    <x-slot name="title">
       Edit Alternatives
    </x-slot>

   <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

             @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
             @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit Alternatives
                        <a href="{{url('alternatives')}}"class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                        <form action="{{ route('alternatif.update', $alternatif->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                <div class="mb-3">
                <label for="kode_alternatif" class="form-label">Kode Alternatif</label>
                <input type="text" class="form-control" id="kode_alternatif" name="kode_alternatif" value="{{ $alternatif->kode_alternatif }}" required>
                @error('kode_alternatif') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
            
                 <div class="mb-3">
                <label for="nama_destinasi" class="form-label">Nama Destinasi</label>
                <input type="text" class="form-control" id="nama_destinasi" name="nama_destinasi" value="{{ $alternatif->nama_destinasi }}" required>
                @error('nama_destinasi') <span class="text-danger">{{$message}}</span> @enderror
                 </div>         


                 <div class="mb-3">
                <label for="C1" class="form-label">C1</label>
                <input type="number" class="form-control" id="C1" name="C1" value="{{ $alternatif->C1 }}" required>
                @error('C1') <span class="text-danger">{{$message}}</span> @enderror
                 </div>

                 <div class="mb-3">
                <label for="C2" class="form-label">C2</label>
                <input type="number" class="form-control" id="C2" name="C2" value="{{ $alternatif->C2 }}" required>
                @error('C2') <span class="text-danger">{{$message}}</span> @enderror
                 </div>

                 <div class="mb-3">
                <label for="C3" class="form-label">C3</label>
                <input type="number" class="form-control" id="C3" name="C3" value="{{ $alternatif->C3 }}" required>
                @error('C3') <span class="text-danger">{{$message}}</span> @enderror
                 </div>

                 <div class="mb-3">
                <label for="C4" class="form-label">C4</label>
                <input type="number" class="form-control" id="C4" name="C4" value="{{ $alternatif->C4 }}" required>
                @error('C4') <span class="text-danger">{{$message}}</span> @enderror
                 </div>

                 <div class="mb-3">
                <label for="C5" class="form-label">C5</label>
                <input type="number" class="form-control" id="C5" name="C5" value="{{ $alternatif->C5 }}" required>
                @error('C5') <span class="text-danger">{{$message}}</span> @enderror
                 </div>

                 <button type="submit" class="btn btn-primary">Update</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
   </div>

</x-app-layout>
