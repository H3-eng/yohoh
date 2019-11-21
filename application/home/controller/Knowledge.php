<?php

namespace app\home\controller;

use app\home\model\Knowledgeinfo;
use think\Controller;
use think\Request;

class Knowledge extends Controller
{
    public function knowledge()
    {
        $knowledgeinfo=new Knowledgeinfo();
        $data=$knowledgeinfo->selectall();
        return view('Knowledge/knowledge',compact('data'));
    }
    public function article(Request $request)
    {
        $id=(int)$request->id;
        $knowledgeinfo=new Knowledgeinfo();
        $data=$knowledgeinfo->selectone($id);
        $type='knowledge';
        return view('Common/article',compact('data','type'));
    }
}
