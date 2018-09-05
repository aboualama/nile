<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Articledatatable;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   
        $articles  =  Article::orderBy('created_at', 'desc')->paginate(8); 

        return view('admin.article.articles' , compact('articles'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.AddNewArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->validate(request(), [
                    
                    'title'       => 'required|string|max:255',
                    'description' => 'required|string',
                    'mobile'      => 'required',  
                    'mail'        => 'required',  
                    'address'     => 'required',  
                    'photo'       => 'required|image',  
                    'slid1'       => 'required|image',  
                    'slid2'       => 'image',  
                    'slid3'       => 'image',  
                    'slid4'       => 'image',  
                    'video'       => 'required',   
            ]); 
        
        $data['title']       = $request->title;     
        $data['description'] = $request->description;     
        $data['mobile']      = $request->mobile;     
        $data['mail']        = $request->mail;
        $data['address']     = $request->address;
        $data['video']       = $request->video; 
        $data['photo']       = $request->photo->store('uploads');
        $data['slid1']       = request('slid1')->store('uploads'); 
        $data['slid2']       = request('slid2')->store('uploads'); 
        $data['slid3']       = request('slid3')->store('uploads'); 
        $data['slid4']       = request('slid4')->store('uploads'); 
 
         
        Article::create($data);
        return redirect ('/admin/article');
 
    }        


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
        $article   = Article::where('id' , $id)->first();
        return view('admin.article.article' , compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
      
         return view('admin.article.Editarticle', compact('article'));
    
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

        $data = $this->validate(request(), [

                    'title'       => 'required|string|max:255',
                    'description' => 'required|string',
                    'mobile'      => 'required',  
                    'mail'        => 'required',  
                    'address'     => 'required',  
                    'photo'       => 'image',  
                    'slid1'       => 'image',  
                    'slid2'       => 'image',  
                    'slid3'       => 'image',  
                    'slid4'       => 'image',  
                    'video'       => 'required',   
            ]); 
        

    
        $data['title']       = $request->title;     
        $data['description'] = $request->description;     
        $data['mobile']      = $request->mobile;     
        $data['mail']        = $request->mail;
        $data['address']     = $request->address;
        $data['video']       = $request->video; 
        
         if (request()->hasFile('photo')) {  
            $data['photo']       = $request->photo->store('uploads');       
         } 


         if (request()->hasFile('slid1')) {  
            $data['slid1']       = request('slid1')->store('uploads');       
         }         
         if (request()->hasFile('slid2')) {  
            $data['slid2']       = request('slid2')->store('uploads');        
         }         
         if (request()->hasFile('slid3')) {  
            $data['slid3']       = request('slid3')->store('uploads');        
         }         
         if (request()->hasFile('slid4')) {  
            $data['slid4']       = request('slid4')->store('uploads');         
         }
     
        $article     = Article::find($id);
        $article->update($data);
        return redirect ('/admin/article');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        article::find($id)->delete();
        return back();
    }


}