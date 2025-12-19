<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Province;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::with('province')->get();
        return view('admin.branches.index', compact('branches'));
    }

    public function create()
    {
        $branch = new Branch();
        $provinces = Province::all();
        return view('admin.branches.form', compact('branch', 'provinces'));
    }

    public function store(Request $request)
    {
        Branch::create($request->all());
        return redirect()->route('admin.branches.index')->with('success', 'Branch added');
    }

    public function edit(Branch $branch)
    {
        $provinces = Province::all();
        return view('admin.branches.form', compact('branch', 'provinces'));
    }

    public function update(Request $request, Branch $branch)
    {
        $branch->update($request->all());
        return redirect()->route('admin.branches.index');
    }

    public function destroy(Branch $branch)
    {
        $branch->delete();
        return back();
    }
}
