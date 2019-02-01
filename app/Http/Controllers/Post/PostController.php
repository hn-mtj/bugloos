<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostRequest;
use App\Model\Category;
use App\Model\CategoryPost;
use App\Model\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a
     * listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            $export=null;
            $page = $request->input('page') ?: 0;
            $count = $request->input('count') ?: 30;
            $data= Post::select("id","title","summery","publish_time")
                ->where("is_active",true)
                ->take((int)$count)
                ->offset(((int)$page - 1) * $count)
                ->get();

            if($data){
                $data=$data->toArray();
                foreach($data as $row){
                    $row["category"]=Category::getList($row["id"]);
                    $export=$row;
                }
            }


            return response(['status' => true, 'resutlt' =>$export ],200);
        }catch (\Exception $e){
            return response(['status' => false, 'message' => $e->getMessage()],403);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        try {
            $data=$request->json()->all();
            $post= Post::create($data);
            if(array_key_exists("category_ids",$data)){
                CategoryPost::saveCategory($post->id,$data["category_ids"]);
            }
            return $post;

        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()],403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $post=Post::where("id",$request->get("id"))->where("is_active",true)->first();
        if($post){
            $post=$post->toArray();
            $post["category"]=Category::getList($post["id"]);
            return response(['status' => true, 'resutlt' =>$post],200);
        }else{
            return response(['status' => false, 'message' =>"not found"],401);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request)
    {
        try {
            $data=$request->json()->all();
            if(isset($data["id"])){
                $post=Post::where("id",$data["id"])->first();
                if($post){
                    if( $post->update($data)){
                        if(array_key_exists("category_ids",$data)){
                            CategoryPost::updateCategory($data["id"],$data["category_ids"]);
                        }else{
                            CategoryPost::updateCategory($data["id"],null);
                        }

                        return response(['status' => true ],200);
                    }else{
                        return response(['status' => false],401);
                    }
                }else{
                    return response(['status' => false],401);
                }
            }else{
                return response(['status' => false],401);
            }
        }catch (\Exception $e) {
            return response(['status' => false, 'message' => $e->getMessage()],403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *

     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        if(Post::where("id",$request->get("id"))->delete()){
            return response(['status' => true, ],200);
        }else{
            return response(['status' => false],403);
        }
    }
}
