<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $about = About::all();
        return view('admin.pages.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'video' => 'required',
        'img' => 'required|image',
    ], [
        'judul.required' => 'Judul harus diisi',
        'Deskripsi.required' => 'Deskripsi harus diisi',
        'video.required' => 'Video harus diisi',
        'img.required' => 'Img harus diisi',
        'img.image' => 'File harus berupa gambar (jpeg, png, bmp, gif, atau svg)',
    ]);

    $imageName = $request->file('img')->hashName();

    $request->file('img')->move(public_path('/about-images'), $imageName);
    $videoName = $request->file('video')->hashName();

    $request->file('video')->move(public_path('/about-videos'), $videoName);

    // Simpan hanya nama file dalam sesi
    session()->flash('judul', $request->judul);
    session()->flash('deskripsi', $request->deskripsi);
    session()->flash('video', $videoName);
    session()->flash('img', $imageName);

    About::create([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'video' => $videoName,
        'img' => $imageName,
    ]);

    return redirect()->to('about')->with('success', 'Data Berhasil Disimpan');
}

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=About::where('id',$id)->first();
        return view('admin.pages.About.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul'=>['sometimes'],
            'deskripsi'=>['sometimes'],
            'img'=>['sometimes'],
            'video'=>['sometimes'],
        ],[
            'judul.required'=>'Name harus diisi',
            'video.required'=>'Name harus diisi',
            'img.required'=>'Img harus diisi',
        ]);
        $about = About::find($id);
    
        if ($request->hasFile('img')) {
            // Hapus gambar lama jika ada
            File::delete(public_path() . "/about-images/$about->img");
    
            $imageName = $request->file('img')->hashName();
            $validatedData['img'] = $imageName;
            $aboutDirectory = public_path() . '/about-images';
            $request->file('img')->move($aboutDirectory, $imageName);
        }
        if ($request->hasFile('video')) {
            // Hapus gambar lama jika ada
            File::delete(public_path() . "/about-images/$about->video");
    
            $videoName = $request->file('video')->hashName();
            $validatedData['video'] = $videoName;
            $aboutDirectory = public_path() . '/about-videos';
            $request->file('video')->move($aboutDirectory, $videoName);
        }
    
        $about->update($validatedData);
    
        return redirect()->to('about')->with('success', 'Data Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
