<?php

    namespace App\Http\Controllers\BackendController;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Menu;

    class MenuController extends Controller
    {
        public function index()
        {
            $menus = Menu::where('submenu_id', 0)->with('submenus')->orderBy('urutan')->paginate(2);
            $user = auth()->user();
            return view('admin.menu.index', compact('menus','user'));
        }
    
        public function create()
        {
            $menus = Menu::where('submenu_id', 0)->get();
            $user = auth()->user();
            return view('admin.menu.create', compact('menus', 'user'));
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'menu' => 'required',
                'url' => 'nullable|url',
                'urutan' => 'required|integer',
            ]);
    
            Menu::create($request->all());
    
            Session::flash('success', 'Menu successfully created!');
            return redirect()->route('menu.index');
        }
    
        public function edit($id)
        {
            $menu = Menu::findOrFail($id);
            $parentMenus = Menu::where('submenu_id', 0)->get(); // Get parent menus

            return view('admin.menu.edit', compact('menu', 'parentMenus'));
        }
    
        public function update(Request $request, $id)
        {
            $menu = Menu::findOrFail($id);
            $menu->update($request->all());

            return redirect()->route('menu')->with('success', 'Menu updated successfully.');
        }

    
        public function destroy($id)
        {
            $menu = Menu::findOrFail($id);

            // Optional: Check for submenus and prevent deletion if any exist
            if ($menu->submenus()->count() > 0) {
                return redirect()->route('admin.menu.index')->with('error', 'Cannot delete menu with submenus.');
            }

            $menu->delete();

            return redirect()->route('admin.menu.index')->with('success', 'Menu deleted successfully.');
        }

    
        public function toggleActive($id)
        {
            $menu = Menu::findOrFail($id);
            $menu->update(['active' => !$menu->active]);
    
            Session::flash('success', 'Menu status updated!');
            return redirect()->route('admin.menu.index');
        }
    }