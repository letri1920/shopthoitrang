<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsEditRequest;
use App\Http\Requests\NewsRequest;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $repository;

    public function __construct(NewsRepository $repository){
        $this->repository = $repository;
    }

    public function getNewsList(){
        $news_list = $this->repository->getNews();
        return view('admin.news.news_list',compact('news_list'));
    }

    public function getNewsAdd(){
        return view('admin.news.news_add');
    }

    public function postNewsAdd(NewsRequest $request){
        $this->repository->postNewsAdd($request);
        return redirect()->route('news_list')->with('success','Thêm tin tức thành công');
    }

    public function getNewsEdit($id){
        $news_edit = $this->repository->getNewsEdit($id);
        return view('admin.news.news_edit',compact('news_edit'));
    }

    public function postNewsEdit($id,NewsEditRequest $request){
        $this->repository->postNewsEdit($id, $request);
        return redirect()->route('news_list')->with('success','Cập nhật tin tức thành công');
    }

    public function getNewsDelete($id){
        $this->repository->getNewsDelete($id);
        return redirect()->back()->with('success','Xóa tin tức thành công');
    }
}
