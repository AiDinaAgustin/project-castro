<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
   
    //untuk halaman seluruh podcast
    public function index()
    {
        $podcasts = Podcast::latest();

        if (request('search')) {
            $podcasts->where('title', 'like', '%' . request('search') . '%');
        }
        return view('podcasts', [
            "title" => "Podcast",
            "podcasts" => $podcasts->get()
        ]);
    }

    public function tampil()
    {
        $podcasts = Podcast::latest();

        if (request('search')) {
            $podcasts->where('title', 'like', '%' . request('search') . '%');
        }
        return view('tampil', [
            "title" => "Podcast",
            "podcasts" => $podcasts->get()
        ]);
    }

    //search podcast
    public function search(Request $request)
{
    if ($request->ajax()) {
        $data = Podcast::where('id', 'like', '%' . $request->search . '%')
            ->orWhere('title', 'like', '%' . $request->search . '%')
            ->orWhere('body', 'like', '%' . $request->search . '%')
            ->get();

        $output = '';

        if (count($data) > 0) {
            foreach ($data as $row) {
                $output .= '
                    
                        <div class="player w-full h-16 flex items-center justify-between px-4 absolute bg-zinc-700 bottom-5">
                            <div class="flex gap-x-2">
                                <a href="/podcasts/' . $row->slug . '">
                                    <img class="w-[65px]" src="https://source.unsplash.com/500x300/?' . $row->category->name . '" alt="">
                                    <div class="flex flex-col items-start text-white">
                                        <!-- title -->
                                        <a href="/authors/' . $row->author->username . '"><p>' . $row->author->name . '</p></a>
                                        <!-- durations -->
                                        <div class="truncate text-slate-400 text-xs mt-2"><a href="/categories/' . $row->category->slug . '">' . $row->category->name . '</a></div>
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                    ';
            }
        } else {
            $output .= 'No results';
        }

        return $output;
    }
}


    // public function search(Request $request){
 
    //     if($request->ajax()){
 
    //         $data=Podcast::where('id','like','%'.$request->search.'%')
    //         ->orwhere('title','like','%'.$request->search.'%')
    //         ->orwhere('body','like','%'.$request->search.'%')->get();
 
    //         $output='';
    //         if(count($data)>0){
    //             $output ='
    //                 <table class="table">
    //                 <thead>
    //                 <tr>
    //                     <th scope="col">#</th>
    //                     <th scope="col">title</th>
    //                     <th scope="col">body</th>
    //                 </tr>
    //                 </thead>
    //                 <tbody>';
    //                     foreach($data as $row){
    //                         $output .='
    //                         <tr>
    //                         <th scope="row">'.$row->id.'</th>
    //                         <td>'.$row->title.'</td>
    //                         <td>'.$row->body.'</td>
    //                         </tr>
    //                         ';
    //                     }
    //             $output .= '
    //                 </tbody>
    //                 </table>';
    //         }
    //         else{
    //             $output .='No results';
    //         }
    //         return $output;
    //     }
    // }

    //untuk halaman single podcast
    public function show(Podcast $podcast)
    {
        return view('podcast', [
            "title" => "Single Podcast",
            "podcast" => $podcast
        ]);
    }
}
