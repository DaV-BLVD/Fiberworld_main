@extends('admin.layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="card shadow-sm border-0">
        <div class="card-body">
            
            <h3 class="mb-4">{{ $branch->exists ? 'Edit' : 'Add' }} Branch</h3>

            <form action="{{ $branch->exists ? route('admin.branches.update', $branch) : route('admin.branches.store') }}" method="POST">
                @csrf 
                @if($branch->exists) @method('PUT') @endif

                <div class="row">
                    {{-- Province --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold small text-uppercase">Province</label>
                        <select name="province_id" class="form-select" required>
                            <option value="" selected disabled>Select Province</option>
                            @foreach($provinces as $p)
                                <option value="{{ $p->id }}" {{ old('province_id', $branch->province_id) == $p->id ? 'selected' : '' }}>
                                    {{ $p->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Branch Name --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold small text-uppercase">Branch Name</label>
                        <input type="text" name="name" value="{{ old('name', $branch->name) }}" 
                            class="form-control" placeholder="e.g. Pokhara Branch" required>
                    </div>

                    {{-- District --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold small text-uppercase">District</label>
                        <input type="text" name="district" value="{{ old('district', $branch->district) }}" 
                            class="form-control" placeholder="e.g. Kaski" required>
                    </div>

                    {{-- Contact Number --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold small text-uppercase">Contact Number</label>
                        <input type="text" name="phone" value="{{ old('phone', $branch->phone) }}" 
                            class="form-control" placeholder="98XXXXXXXX" required>
                    </div>

                    {{-- In-charge Name --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold small text-uppercase">In-charge Name</label>
                        <input type="text" name="incharge_name" value="{{ old('incharge_name', $branch->incharge_name) }}" 
                            class="form-control" required>
                    </div>

                    {{-- Designation --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold small text-uppercase">Designation</label>
                        <input type="text" name="designation" value="{{ old('designation', $branch->designation) }}" 
                            class="form-control" placeholder="e.g. Front Desk" required>
                    </div>
                </div>

                <div class="mt-4 pt-3 border-top">
                    <button type="submit" class="btn btn-success px-4">
                        <i class="fe fe-save me-1"></i> Save Branch
                    </button>
                    <a href="{{ route('admin.branches.index') }}" class="btn btn-light px-4 ms-2">Cancel</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection