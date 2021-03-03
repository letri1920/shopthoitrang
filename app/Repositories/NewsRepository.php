<?php
namespace App\Repositories;

use App\Models\News;

class NewsRepository
{
    public function getNews(){
        return News::all();
    }

    public function postNewsAdd($request){
        $image='';
        if($request->hasfile('img')){
            $file = $request->file('img');
            $image = time().'_'.$file->getClientOriginalName();
            $destinationPath = public_path('frontend\image\news');
            $file->move($destinationPath,$image);
        }

        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->author = $request->author;
        $news->image = $image;
        $news->save();
        
    }

    public function getNewsEdit($id){
        return News::find($id);
    }

    public function postNewsEdit($id, $request){
        $image = '';
        if($request->hasfile('img')){
            $file = $request->file('img');
            $image = time().'_'.$file->getClientOriginalName();
            $destinationPath = public_path('frontend\image\news');
            $file->move($destinationPath, $image);
        }

        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->author = $request->author;
        if($request->hasfile('img')){
            $news->image = $image;
        }
        $news->save();
    }

    public function getNewsDelete($id){
        return News::destroy($id);
    }
}