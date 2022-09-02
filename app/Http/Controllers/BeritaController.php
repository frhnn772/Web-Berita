<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Validation\Rule;

class BeritaController extends Controller
{
    public function index(){
        $data = Berita::latest()->take(5)->get();
        // $validate = Detail_Jadwal::where('jadwal_id',$jadwal)->where('waktu',$waktu)->count();
        return view ('index', compact('data'));
    }
    public function input(){
        return view ('admin.input');
    }
    public function data(){
        $data = Berita::all();
        return view ('admin.data',compact('data'));
    }
    public function store(Request $request){

        $this->validate($request, [
            'judul_berita' => 'required',
            'kreator' => 'required',
            'isi_berita' => 'required',
            'slug' => 'required|unique:berita'
        ]);
        $gambar_berita = $request->gambar_berita;
        $new_gambar_berita = time().$gambar_berita->getClientOriginalName();
        $berita = Berita::create([
            'judul_berita' => $request->judul_berita,
            'kreator' => $request->kreator,
            'isi_berita' => $request->isi_berita,
            'gambar_berita' => 'uploads/gambar_berita/'.$new_gambar_berita,
            'slug' => $request->slug,
        ]);
        $gambar_berita->move('uploads/gambar_berita/',$new_gambar_berita);

        return redirect('/data')->with('success', 'Data Berhasil di Tambah');
    }
    public function delete($id){
        $berita = Berita::find($id);
        $berita->delete();

        return redirect('/data')->with('success','Data Berhasil di Hapus');
    }

    public function update(Request $request,Berita $berita){
        $this->validate($request, [
            'judul_berita'=> 'required',
            'kreator'=> 'required',
            'isi_berita'=> 'required',
            'slug'=> ['required', Rule::unique('berita')->ignore($berita->id)]
        ]);

        if ($request->hasFile('gambar_berita')) {
            $image = $request->file('gambar_berita');
            $image->storeAs('uploads/gambar_berita/', $image->hashName());
            $new_gambar_berita = time().$image->getClientOriginalName();

            // Berita::delete('uploads/gambar_berita/' .$berita->image);

            $berita->update([
                'judul_berita' => $request->judul_berita,
                'kreator' => $request->kreator,
                'isi_berita' => $request->isi_berita,
                'gambar_berita' => 'uploads/gambar_berita/'.$new_gambar_berita,
                'slug' => $request->slug,
            ]);
            $image->move('uploads/gambar_berita', $new_gambar_berita);
        }else{
            $berita->update([
                'judul_berita' => $request->judul_berita,
                'kreator' => $request->kreator,
                'isi_berita' => $request->isi_berita,
                'slug' => $request->slug,
            ]);
        }
        return redirect ('/data')->with('success','Data Berhasil di Ubah');
    }
    public function edit($id){
        $berita = Berita::select('*')
        ->where('id', $id)
        ->get();
        return view('admin.edit',compact('berita'));
    }
    public function daftarBerita(){
        $data = Berita::paginate(4);
        paginationPaginator::useBootstrap();
        return view('daftar_berita',compact('data'));
    }
    public function isiBerita($slug){
        $berita = Berita::where('slug',$slug)->get();
        return view ('isiBerita',compact ('berita'));
    }
    public function getListBerita() {
        $berita = Berita::latest()->get();
        return response()->json([
            'listberita'=>$berita
        ]);
    }
    public function getBerita($slug) {
        $berita = Berita::where('slug', $slug)->get();
        return response()->json([
            'berita'=>$berita
        ]);
    }   
}
