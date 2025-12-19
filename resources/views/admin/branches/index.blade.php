@extends('admin.layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="card shadow-sm border-0">
        <div class="card-body">

            {{-- Header with Action Button --}}
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="m-0">Network Branches</h3>
                <a href="{{ route('admin.branches.create') }}" class="btn btn-primary btn-sm">
                    <i class="fe fe-plus"></i> Add New Branch
                </a>
            </div>

            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Branches Table --}}
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="bg-light">
                        <tr>
                            <th class="border-0 text-uppercase small fw-bold">Branch & District</th>
                            <th class="border-0 text-uppercase small fw-bold">Province</th>
                            <th class="border-0 text-uppercase small fw-bold">Contact Person</th>
                            <th class="border-0 text-uppercase small fw-bold text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($branches as $b)
                            <tr>
                                <td>
                                    <div class="fw-bold text-dark">{{ $b->name }}</div>
                                    <small class="text-primary fw-bold text-uppercase">{{ $b->district }}</small>
                                </td>
                                <td>
                                    <span class="text-muted">{{ $b->province->name }}</span>
                                </td>
                                <td>
                                    <div class="fw-medium">{{ $b->incharge_name }}</div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.branches.edit', $b) }}" class="btn btn-outline-warning btn-sm border-0">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                        
                                        <form action="{{ route('admin.branches.destroy', $b) }}" method="POST" class="d-inline">
                                            @csrf 
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm border-0" 
                                                onclick="return confirm('Are you sure you want to delete this branch?')">
                                                <i class="fe fe-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4">
                                    <div class="alert alert-info m-0">
                                        No branches found. Please create one.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection