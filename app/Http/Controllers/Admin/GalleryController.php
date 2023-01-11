<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Models\Solution;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\GalleryFormRequest;

class GalleryController extends Controller
{
    public function index() {
    
        return view('admin.gallery.index');
    }


    public function show($id) {
    
        return Gallery::find($id);
        // return GalleryImage::findOrFail($images);
    }


    public function create() {

        $solutions = Solution::all();
        return view('admin.gallery.create', compact('solutions'));
    }


    public function store(GalleryFormRequest $request) {
    
        $validateData = $request->validated();

        $solution = Solution::findOrFail($validateData['solution_id']);

        $gallery = $solution->galleries()->create([
            'solution_id' => $validateData['solution_id'],
            'name' => $validateData['name'],
            'description' => $validateData['description'],
            'status' => $request->status == true ? '1':'0',
        ]);

        if($request->hasFile('image')){
            $uploadPath = 'uploads/gallery/';

            foreach($request->file('image') as $imageFile){
                $extension = $imageFile->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $imageFile->move($uploadPath,$filename);
                $finalImagePathName = $uploadPath.$filename;

                $gallery->galleryImages()->create([
                    'gallery_id' => $gallery->id,
                    'image' => $finalImagePathName,
                ]);
            }
        }

        return  redirect('/admin/gallery')->with('message', 'Galerie Creata cu Succes!');
    }



    public function edit(int $gallery_id) {
    
        $solutions = Solution::all();
        $gallery = Gallery::findOrFail($gallery_id);
        return view('admin/gallery.edit', compact('solutions', 'gallery'));
    }



    public function update(GalleryFormRequest $request, int $gallery_id)  {
    
        $validateData = $request->validated();
        $gallery = Solution::findOrFail( $validateData ['solution_id'])
                  ->galleries()->where('id', $gallery_id)->first();
        
        if($gallery) {
        
            $gallery->update([
                'solution_id' => $validateData['solution_id'],
                'name' => $validateData['name'],
                'description' => $validateData['description'],
                'status' => $request->status == true ? '1':'0',
            
            
            ]);

            if($request->hasFile('image')){
                $uploadPath = 'uploads/gallery/';
    
                $i = 1;
                foreach($request->file('image') as $imageFile){
                    $extension = $imageFile->getClientOriginalExtension();
                    $filename = time().$i++.'.'.$extension;
                    $imageFile->move($uploadPath,$filename);
                    $finalImagePathName = $uploadPath.$filename;
    
                    $gallery->galleryImages()->create([
                        'gallery_id' => $gallery->id,
                        'image' => $finalImagePathName,
                    ]);
                }
            }

            return  redirect('/admin/gallery')->with('message', 'Galerie Actualizata cu Succes!');
        } 
        else 
        {
            return redirect('admin/gallery')->with('message', 'Nu Exista o Astfel de Galerie!');
        }
    }


    public function destroy(int $gallery_id)
    {
        //dd ('ti-am sters produsul! 😃');

        $gallery = Gallery::findOrFail($gallery_id);
        if($gallery->galleryImages) {
            foreach($gallery->galleryImages as $image) {
                if(File::exists($image->image)) {
                   File::delete($image->image);
                }
            }
        }
        $gallery->delete();
        return redirect()->back()->with('message','Galeria si toate fotografiile ei au fost sterse cu succes!');
    }

    public function destroyImage(int $gallery_image_id)
    {
        $galleryImage = galleryImage::findOrFail($gallery_image_id);
        if(File::exists($galleryImage->image)) {
           File::delete($galleryImage->image);
        }
        $galleryImage->delete();
        return redirect()->back()->with('message','Imagine Stersa!');
    }
}
