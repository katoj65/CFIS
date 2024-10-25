<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\ArticleModel;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//get articles
static function showArticle($title='',$topic='',$tag=''){
    $query=ArticleModel::first();
    if($title!='' and $topic!='' and $tag!=''){
    $query=ArticleModel::where(['title'=>$title,'topic'=>$topic,'tag'=>$tag])->first();
    }elseif($title!='' and $topic=='' and $tag==''){
    $query=ArticleModel::where('topic',$topic)->first();
    }elseif($title!='' and $topic!='' and $tag==''){
    $query=ArticleModel::where(['title'=>$title,'topic'=>$topic])->first();
    }elseif($title!='' and $tag!='' and $topic==''){
    $query=ArticleModel::where(['title'=>$title,'tag'=>$tag])->first();
    }
    return $query;
    }







    public function index()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//





//climate change
public function climateChange(){
$data['title']="Climate Change";
$data['response']=[
'crisis'=>ArticleController::showArticle('A growing crisis','climate change'),
];
return Inertia::render('ArticlePage',$data);
}



//carbon markets
public function carbonMarkets(){
$data['title']='Carbon Markets';
$data['response']=[];
return Inertia::render('CarbonMarketsPage',$data);
}










}
