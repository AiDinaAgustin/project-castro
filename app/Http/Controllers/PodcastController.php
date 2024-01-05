<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
   
    //untuk halaman seluruh podcast
    public function index()
    {
        return view('podcasts', [
            "title" => "Podcast",
            "podcasts" => Podcast::all()
        ]);
    }

    //search podcast
    public function search(Request $request){
 
        if($request->ajax()){
 
            $data=Podcast::where('id','like','%'.$request->search.'%')
            ->orwhere('title','like','%'.$request->search.'%')
            ->orwhere('body','like','%'.$request->search.'%')->get();
 
            $output='';
            if(count($data)>0){
                $output ='
                    <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">title</th>
                        <th scope="col">body</th>
                    </tr>
                    </thead>
                    <tbody>';
                        foreach($data as $row){
                            $output .='
                            <tr>
                            <th scope="row">'.$row->id.'</th>
                            <td>'.$row->title.'</td>
                            <td>'.$row->body.'</td>
                            </tr>
                            ';
                        }
                $output .= '
                    </tbody>
                    </table>';
            }
            else{
                $output .='No results';
            }
            return $output;
        }
    }

    //untuk halaman single podcast
    public function show(Podcast $podcast)
    {
        return view('podcast', [
            "title" => "Single Podcast",
            "podcast" => $podcast
        ]);
    }
}
