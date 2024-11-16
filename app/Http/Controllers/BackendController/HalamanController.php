<?php

    namespace App\Http\Controllers\BackendController;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Page;
    use Yajra\DataTables\Facades\DataTables;

    class HalamanController extends Controller
    {
            public function index()
            {
                $pages = Page::paginate(5); // Ambil semua data dari model Page
                $user = auth()->user();
                return view('admin.pages.index', compact('pages', 'user'));
            }
        
            public function create()
            {
                $token = mt_rand(100000, 999999);
                $secret_key = config('app.key'); // Use the app key as a secret
                return view('admin.pages.create', compact('token', 'secret_key'));
            }
        
            public function store(Request $request)
            {
                $request->validate([
                    'judul' => 'required|string|max:255',
                    'short' => 'nullable|string|max:255',
                    'isi' => 'required|string',
                    'link' => 'nullable|url',
                ]);
        
                Page::create($request->all());
                return redirect()->route('admin.pages.index')->with('success', 'Page created successfully.');
            }
        
            public function edit($id)
            {
                $page = Page::findOrFail($id);
                $token = mt_rand(100000, 999999);
                $secret_key = config('app.key');
                return view('admin.pages.edit', compact('page', 'token', 'secret_key'));
            }
        
            public function update(Request $request, $id)
            {
                $request->validate([
                    'judul' => 'required|string|max:255',
                    'short' => 'nullable|string|max:255',
                    'isi' => 'required|string',
                    'link' => 'nullable|url',
                ]);
        
                $page = Page::findOrFail($id);
                $page->update($request->all());
        
                return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully.');
            }
        
            public function destroy($id)
            {
                Page::findOrFail($id)->delete();
                return redirect()->route('admin.pages.index')->with('success', 'Page deleted successfully.');
            }
    }