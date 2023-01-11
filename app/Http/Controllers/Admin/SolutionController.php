<?php

namespace App\Http\Controllers\Admin;

use App\Models\Solution;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SolutionFormRequest;
use Illuminate\Support\Facades\File;

class SolutionController extends Controller
{
    public function index() {
    
    return view ('admin.solution.index');
    }


    public function show($id) {
    
        return Solution::find($id);
    }

    
    public function create() {
    
        return view('admin.solution.create');
    }


    public function store(SolutionFormRequest $request) {
    
        // dd('sunt aici🫡');

        $validatedData = $request->validated();

        $solution = new Solution;
        $solution->name = $validatedData['name'];
        $solution->description = $validatedData['description'];

        if($request->hasFile('image')) 
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/solution/', $filename);
            $solution->image = $filename;
        }

        $solution->b1 = $validatedData['b1'];
        $solution->b2 = $validatedData['b2'];
        $solution->b3 = $validatedData['b3'];
        $solution->b4 = $validatedData['b4'];
        $solution->b5 = $validatedData['b5'];
        $solution->b6 = $validatedData['b6'];
        $solution->b7 = $validatedData['b7'];
        $solution->b8 = $validatedData['b8'];
        $solution->b9 = $validatedData['b9'];
        $solution->b10 = $validatedData['b10'];
        $solution->b11 = $validatedData['b11'];
        $solution->b12 = $validatedData['b12'];
        $solution->b13 = $validatedData['b13'];
        $solution->status = $request->status == true ? '1':'0';

        $solution->save();

        
        return redirect('admin/solution')->with('message', 'Solutie creata cu succes!');
    }


    public function edit(Solution $solution) {
    
        return view('admin.solution.edit', compact('solution'));
    }


    public function update(SolutionFormRequest $request, $solution) {
    
        $validatedData = $request->validated();
        
        $solution = Solution::findOrFail($solution);

        $solution->name = $validatedData['name'];
        $solution->description = $validatedData['description'];

        if($request->hasFile('image')) 
        {
            $path = 'uploads/solution/'.$solution->image;
            if(File::exists($path)) {
               File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/solution/', $filename);
            $solution->image = $filename;
        }

        $solution->b1 = $validatedData['b1'];
        $solution->b2 = $validatedData['b2'];
        $solution->b3 = $validatedData['b3'];
        $solution->b4 = $validatedData['b4'];
        $solution->b5 = $validatedData['b5'];
        $solution->b6 = $validatedData['b6'];
        $solution->b7 = $validatedData['b7'];
        $solution->b8 = $validatedData['b8'];
        $solution->b9 = $validatedData['b9'];
        $solution->b10 = $validatedData['b10'];
        $solution->b11 = $validatedData['b11'];
        $solution->b12 = $validatedData['b12'];
        $solution->b13 = $validatedData['b13'];
        $solution->status = $request->status == true ? '1':'0';

        $solution->update();

        return redirect('admin/solution')->with('message','Solutie actualizata cu succes!');
    }


    public function destroy(int $Solution_id)
    {
        //dd ('ti-am sters produsul! 😃');

        $solution = Solution::findOrFail($Solution_id);
        if($solution->image) {
            if(File::exists('image')) {
                File::delete('image');
             }
        }
        $solution->delete();
        return redirect()->back()->with('message','Solutie Stearsa!');
    }
}
