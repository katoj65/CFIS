<?php
use App\Models\ArticleModel;




class Helper{

//get articles
static function showArticle($title,$topic='',$tag=''){
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




























}