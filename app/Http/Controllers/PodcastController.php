<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\User;
use App\Models\Category;
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
//     public function search(Request $request)
// {
//     if ($request->ajax()) {
//         $data = Podcast::where('id', 'like', '%' . $request->search . '%')
//             ->orWhere('title', 'like', '%' . $request->search . '%')
//             ->orWhere('body', 'like', '%' . $request->search . '%')
//             ->get();

//         $output = '';

//         if (count($data) > 0) {
//             foreach ($data as $row) {
//                 $output .= '
                    
//                         <div class="player w-full h-16 flex items-center justify-between px-4 absolute bg-zinc-700 bottom-5">
//                             <div class="flex gap-x-2">
//                                 <a href="/podcasts/' . $row->slug . '">
//                                     <img class="w-[65px]" src="https://source.unsplash.com/500x300/?' . $row->category->name . '" alt="">
//                                     <div class="flex flex-col items-start text-white">
//                                         <!-- title -->
//                                         <a href="/authors/' . $row->author->username . '"><p>' . $row->author->name . '</p></a>
//                                         <!-- durations -->
//                                         <div class="truncate text-slate-400 text-xs mt-2"><a href="/categories/' . $row->category->slug . '">' . $row->category->name . '</a></div>
//                                     </div>
//                                 </a>
//                             </div>
                            
//                         </div>
//                     ';
//             }
//         } else {
//             $output .= 'No results';
//         }

//         return $output;
//     }
// }

public function search(Request $request)
{
    if ($request->ajax()) {

        // Search in Podcasts
        $podcastData = Podcast::where('id', 'like', '%' . $request->search . '%')
            ->orWhere('title', 'like', '%' . $request->search . '%')
            ->orWhere('body', 'like', '%' . $request->search . '%')->get();

        // Search in Users
        $userData = User::where('id', 'like', '%' . $request->search . '%')
            ->orWhere('name', 'like', '%' . $request->search . '%')
            ->orWhere('username', 'like', '%' . $request->search . '%')->get();
        
        //search in categories
        $categoryData = Category::where('id', 'like', '%' . $request->search . '%')
            ->orWhere('name', 'like', '%' . $request->search . '%')
            ->orWhere('slug', 'like', '%' . $request->search . '%')->get();

        $output = '';

        // Display Podcast and User Results
        foreach ($podcastData as $row) {
            $output .= '
                <div class="swiper-slide">
                    <a href="/podcasts/' . $row->slug . '">
                        <div class="result-container bg-zinc-800 w-full px-2 rounded-md p-2 mb-2 flex items-center">
                            <div class="w-10 mr-2">
                                <img class="w-full" src="https://source.unsplash.com/400x400/?' . $row->category->name . '" alt="your media">
                                <div class="play-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                                </div>
                            </div>
                            <div class="flex-grow">
                                <h4 class="truncate text-white text-base mb-2">' . $row->title . '</h4>
                                <div class="truncate text-slate-400 text-xs">Podcast</div>
                            </div>
                        </div>
                    </a>
                </div>
            ';
        }

        foreach ($userData as $row) {
            $output .= '
                <div class="swiper-slide">
                    <a href="/users/' . $row->id . '">
                        <div class="result-container bg-zinc-800 w-full px-2 rounded-md p-2 mb-2 flex items-center">
                            <div class="w-10 mr-2">
                                <!-- You can replace the image source with the actual user image -->
                                <img class="w-full" src="https://source.unsplash.com/400x400/?user" alt="user profile">
                            </div>
                            <div class="flex-grow">
                                <h4 class="truncate text-white text-base mb-2">' . $row->name . '</h4>
                                <div class="truncate text-slate-400 text-xs">User</div>
                            </div>
                        </div>
                    </a>
                </div>
            ';
        }

        foreach ($categoryData as $row) {
            $output .= '
                <div class="swiper-slide">
                    <a href="/categories/' . $row->slug . '">
                        <div class="result-container bg-zinc-800 w-full px-2 rounded-md p-2 mb-2 flex items-center">
                            <div class="w-10 mr-2">
                                <!-- You can replace the image source with the actual user image -->
                                <img class="w-full" src="https://source.unsplash.com/400x400/?' . $row->name . '" alt="your media">
                            </div>
                            <div class="flex-grow">
                                <h4 class="truncate text-white text-base mb-2">' . $row->name . '</h4>
                                <div class="truncate text-slate-400 text-xs">Genre</div>
                            </div>
                        </div>
                    </a>
                </div>
            ';
        }

        if (empty($output)) {
            $output .= 'No results';
        }

        return $output;
    }
}


// public function search(Request $request)
// {
//     if ($request->ajax()) {

//         $data = Podcast::where('id', 'like', '%' . $request->search . '%')
//             ->orWhere('title', 'like', '%' . $request->search . '%')
//             ->orWhere('body', 'like', '%' . $request->search . '%')->get();

//         $output = '';
//         if (count($data) > 0) {
//             foreach ($data as $row) {
//                 $output .= '
//                                     <div class="swiper-slide">
//                         <a href="/podcasts/' . $row->slug . '">
//                             <div class="cover-music bg-zinc-800 w-full px-2 rounded-md p-2 mb-2 flex items-center"> <!-- Added flex class -->
//                                 <div class="w-10 mr-2"> <!-- Added margin class -->
//                                     <img class="w-full" src="https://source.unsplash.com/400x400/?' . $row->category->name . '" alt="your music">
//                                     <div class="play-btn">
//                                         <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
//                                     </div>
//                                 </div>
//                                 <div class="flex-grow"> <!-- Added flex-grow class -->
//                                     <h4 class="truncate text-white text-base mb-2">' . $row->title . '</h4>
//                                     <div class="truncate text-slate-400 text-xs">Podcast</div>
//                                 </div>
//                             </div>
//                         </a>
//                     </div>

//                     ';
//             }
//         } else {
//             $output .= 'No results';
//         }
//         return $output;
//     }
// }


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
