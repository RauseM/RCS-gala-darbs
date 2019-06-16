<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {    
//     return view('welcome');
// });


Route::get('/', function () {    
    return view('index');
});

// Route::get('/branding', function () {
//     return view('branding');
// });

Route::get('/home', function () {
    return view('index');
});

Route::get('/mizo', function () {
    return view('mizo');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/contacts', function () {
//     return view('contacts');
// });

Route::get('/illustrations', function () {
    return view('illustartions');
});

Route::get('/photos', function () {
    return view('photos');
});

Route::get('/pattern', function () {
    return view('pattern');
});

Route::get('/RAUSE', function () {
    return view('RAUSE');
});











Route::get('/form', function () {
    return view('form');
});

Route::get('/form-get', function () {
    return view('form-get');
});


// Route::get('/', function () {

    
//     return view('footer');
// });


Route::get('/news', function () {
    return view('pages.news');
});


// Route::get('/contacts', function () {
//     return view('pages.contacts');
// });

Route::get('/branding', function () {
    
    $allPosts = App\BlogPost::orderBy('id', 'desc')
        ->get();
    return view('pages.branding33', [
        'posts' => $allPosts,
    ]);
});

// Route::get('/branding33/{id}', function ($id) {
//     $singlePost = App\BlogPost::find($id);
    
//     return view('pages.singleblog', [
//         'post' => $singlePost,
//     ]);
    
// });




Route::get('/contacts', function () {
    $isSuccessfull = Request::get('success', '');
    return view('contacts', [
        'formSuccess' => $isSuccessfull,
    ]);
    
});



Route::any('/submitform', function () {

    // dd('dd');
// dd($_GET);
    $name = Request::get("yourname", null);
    $email = Request::get("youremail", "");
    $msg = Request::get("yourmessage", null);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { return redirect("/contacts?success=form-successfull");
        } else { return redirect("/contacts?success=form-not-successfull");
    }

    // return redirect("/contacts");
    
});




// Route::any('/newblogpost', function () {
//     return view('pages.new-blog');
// });

// Route::any('/submit-newblogpost', function () {
//     $title      = Request::post("title", null);
//     $img_url    = Request::post("img_url", null);
//     $body       = Request::post("body", null);
//     $excerpt    = Request::post("excerpt", null);
//     $slug = Request::post("slug", null);
    
//     $allPosts = new App\BlogPost;

//     $post->title    = $title;
//     $post->img_url  = $img_url;
//     $post->body     = $body;
//     $post->excerpt  = $excerpt;
//     $post->slug     = $slug;

//     $post->save();

//     return redirect("/blog");

// });

















Route::any('/newblogpost', function () {
    return view('pages.new-blog');
});
Route::any('/submit-newblogpost', function () {
    $title    = Request::post('title', null);
    $img_url  = Request::post('img_url', null);
    $body     = Request::post('body', null);
    $excerpt  = Request::post('excerpt', null);
    $slug     = Request::post('slug', null);
    $tags     = Request::post('tags', null);
    $post = new App\BlogPost;
    $post->title   = $title;
    $post->img_url = $img_url;
    $post->body    = $body;
    $post->excerpt = $excerpt;
    $post->slug    = $slug;
    $post->tags    = $tags;
    $post->save();
    return redirect('/blog');
    //return view('pages.contact'); 
});