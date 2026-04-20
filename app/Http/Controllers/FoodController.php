<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::orderBy('created_at', 'desc')->paginate(100);
        return view('admin.manage-food', compact('foods'));
    }
    
    public function create()
    {
        return view('admin.manage-food');
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'category' => 'required|in:Burger,Pizza,Dessert',
            'details' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        try {
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/foods'), $imageName);
                $imagePath = 'images/foods/' . $imageName;
            } else {
                $imagePath = 'images/foods/default.jpg';
            }
            
            Food::create([
                'name' => $request->name,
                'category' => $request->category,
                'details' => $request->details,
                'price' => $request->price,
                'image' => $imagePath
            ]);
            
            return redirect()->route('admin.foods')->with('success', 'নতুন খাবার যোগ করা হয়েছে!');
            
        } catch (\Exception $e) {
            return back()->with('error', 'খাবার যোগ করতে সমস্যা: ' . $e->getMessage());
        }
    }
    
    public function edit($id)
    {
        $food = Food::findOrFail($id);
        return view('admin.manage-food', compact('food'));
    }
    
    public function update(Request $request, $id)
    {
        $food = Food::findOrFail($id);
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'category' => 'required|in:Burger,Pizza,Dessert',
            'details' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        try {
            $data = [
                'name' => $request->name,
                'category' => $request->category,
                'details' => $request->details,
                'price' => $request->price,
            ];
            
            if ($request->hasFile('image')) {
                if ($food->image && file_exists(public_path($food->image))) {
                    unlink(public_path($food->image));
                }
                
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/foods'), $imageName);
                $data['image'] = 'images/foods/' . $imageName;
            }
            
            $food->update($data);
            
            return redirect()->route('admin.foods')->with('success', 'খাবার আপডেট করা হয়েছে!');
            
        } catch (\Exception $e) {
            return back()->with('error', 'আপডেট করতে সমস্যা: ' . $e->getMessage());
        }
    }
    
    public function destroy($id)
    {
        try {
            $food = Food::findOrFail($id);
            
            if ($food->image && $food->image != 'images/foods/default.jpg' && file_exists(public_path($food->image))) {
                unlink(public_path($food->image));
            }
            
            $food->delete();
            
            return redirect()->route('admin.foods')->with('success', 'খাবার ডিলিট করা হয়েছে!');
            
        } catch (\Exception $e) {
            return back()->with('error', 'ডিলিট করতে সমস্যা: ' . $e->getMessage());
        }
    }
}