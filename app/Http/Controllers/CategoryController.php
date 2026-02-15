<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
use App\Models\Category;

public function index()
{
    $categories = Category::with('parent')
                    ->where('is_delete', 0)
                    ->get();

    return view('categories.index', compact('categories'));
}


    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    $parents = Category::whereNull('parent_id')->get();
    return view('categories.create', compact('parents'));
}


    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    Category::create([
        'name' => $request->name,
        'description' => $request->description,
        'parent_id' => $request->parent_id,
        'is_active' => 1,
        'is_delete' => 0,
    ]);

    return redirect()->route('categories.index');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit($id)
{
    $category = Category::findOrFail($id);

    // Lấy danh mục cha (không lấy chính nó)
    $parents = Category::where('id', '!=', $id)
                ->where('is_delete', 0)
                ->get();

    return view('categories.edit', compact('category', 'parents'));
}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
    $category = Category::with('parent')->findOrFail($id);

    // Không cho chọn chính nó
    if ($request->parent_id == $id) {
        return back()->with('error', 'Không thể chọn chính nó làm danh mục cha');
    }

    // Không cho tạo vòng lặp
    if ($request->parent_id) {
        $newParent = Category::find($request->parent_id);

        if ($newParent && $newParent->isChildOf($id)) {
            return back()->with('error', 'Không thể chọn danh mục con làm cha (tạo vòng lặp)');
        }
    }

    $category->update([
        'name' => $request->name,
        'description' => $request->description,
        'parent_id' => $request->parent_id,
    ]);

    return redirect()->route('categories.index');
}


    /**
     * Remove the specified resource from storage.
     */
public function destroy($id)
{
    $category = Category::findOrFail($id);

    $category->update([
        'is_delete' => 1
    ]);

    return redirect()->route('categories.index');
}

}
