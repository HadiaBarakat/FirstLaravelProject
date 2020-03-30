<?php

use App\Country;
use App\Image;
use App\Role;
use App\Tag;
use App\User;
use App\Video;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Post;

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

/*Route::get('/', function () {
    return view('welcome');

});

Route::get('/about', function () {
    return "About";

});

Route::get('/contact', function () {
    return "Contact";

});

Route::get('/post/{id}', function ($id){
    return "Post Id " . $id;
});

Route::get('/admin/posts/example', array('as' => 'admin.home', function (){
   // $url = route("admin.home");
    return "<a href=" . route('admin.home') . ">ClICK HERE</a>";

}));

Route::get('/post/{id}', 'PostController@index');

Route::resource('posts', 'PostController');

Route::get('/contact', 'PostController@contact');

Route::get('/post', 'PostController@post');


Route::get('/insertPost', function(){
    DB::insert('INSERT INTO posts(postTitle, postAuthor, postContent) values(?, ?, ?)'
            , ['PHP with Laravel', 'Hadia', 'Laravel is the best thing that happened to PHP']);
});


Route::get('/read', function (){
    $selectAllPostsQueryResult =  DB::select('SELECT * FROM posts');


    foreach($selectAllPostsQueryResult as $postsRow){
        echo $postsRow->postTitle . " " . $postsRow->postAuthor . "<br>";
    }

});

Route::get('/update', function (){
    $updatedPosts = DB::update('UPDATE posts SET postTitle = ? '
        . 'WHERE postId = ?',
            ["updated", 2]);

    return $updatedPosts;
});

Route::get('/delete', function (){
   return DB::delete('DELETE FROM posts WHERE postId = ?', [3]);
});*/

/*
Route::get('/read', function (){
    $posts = Post::all();

    foreach($posts as $post){
        echo $post->postTitle;
    }
});

Route::get('/find', function (){
    $post = Post::find(2);

   return $post->postTitle;
});

Route::get('/findWhere', function(){
    return Post::where('postTitle', 'updated')->orderby('postId', 'desc')->take(2)->get();
});

Route::get('/findMore', function(){
    $post = Post::findOrFail(3);
    return $post->postTitle;
});

Route::get('/insert', function (){
    $post = new Post();
    $post->postTitle = "new Eloquent title";
    $post->postAuthor = "Someone";
    $post->postContent = "new Eloquent content";
    $post->save();

});


Route::get('/update', function (){
    $post = Post::find(2);
    $post->postTitle = "new Eloquent title";
    $post->postAuthor = "Someone";
    $post->postContent = "new Eloquent content";
    $post->save();

});

Route::get('/create', function(){
    Post::create(['userId' => 1,
                    'postTitle' => 'I\'m the create method',
                    'postAuthor' => 'create',
                    'postContent' => '']);
});

Route::get('/update', function(){
    return Post::where('postId', 1)
                ->update(['postTitle' => 'PHP', 'postAuthor'=>'me;']);
});*/


/*Route::get('/delete', function(){
    $post = Post::find(7);
    $post->delete();
});*/

/*Route::get('/delete', function() {
    Post::destroy([11, 12]);
});

Route::get('/readSoftDeleted', function() {
     return Post::onlyTrashed()->get();
});

Route::get('/readAll', function(){
    return Post::withTrashed()->get();
});

Route::get('/restore', function (){
    Post::query()->restore();
});

Route::get('/forceDelete', function (){
    Post::onlyTrashed()->forceDelete();
});

Route::get('/user/{id}/post', function ($id){
    return User::find($id)->post->postTitle;
});

Route::get('/post/{id}/user', function ($id){
    return Post::find($id)->user;//->name;
});

Route::get('/posts', function(){
    $user = User::find(1);
    foreach ($user->posts as $post){
        echo $post . "\n";
    }
});*/


/*Route::get('/users', function(){
    $role  = Role::find(2);
    foreach ($role->users()->get() as $user){
        echo $user. "\n";
    }

});

Route::get('/roles', function (){
    $user = User::find(1);
    foreach ($user->roles as $role){
        echo $role . "\n";
    }

});

Route::get('roleUser', function (){
    $user = User::find(1);
    foreach ($user->roles as $role){
        echo $role->pivot->created_at;
    }
});

Route::get('role', function (){
    return User::find(1);
});*/

//Route::get('country/{id}/posts', function ($id){
//    $country = Country::find($id);
//    foreach ($country->posts as $post){
//        echo $post ."\n";
//    }
//});

//Route::get('user/{id}/image', function ($id){
//    $user = User::find($id);
//    return $user->image;
//});
//
//Route::get('post/{id}/image', function ($id){
//    $post = Post::find($id);
//    return $post->image;
//});
//
//Route::get('image/{id}/owner', function($id){
//    return Image::find($id)->imageable;
//});
//
//Route::get('post/{id}/tags', function ($id){
//    $post = Post::find($id);
//    foreach ($post->tags as $tag){
//        echo $tag . "\n";
//    }
//});
//
//Route::get('video/{id}/tags', function ($id){
//    $video = Video::find($id);
//    foreach ($video->tags as $tag){
//        echo $tag . "\n";
//    }
//});
//
//Route::get('tag/{id}/posts', function ($id){
//    $tag = Tag::find($id);
//    foreach ($tag->videos as $video) {
//        echo $video . "\n";
//    }
//});

Route::group(['middleware'=>'web'], function (){
    Route::resource('/posts', 'PostController');

});

Route::get('/dates', function (){
    $date = new DateTime("+1 year");
    echo $date->format('d-m-Y');
    echo "<br>";
    echo Carbon::now() ."\n";
    echo Carbon::now()->subDays(30)->diffForHumans();

});

Route::get('/getName', function (){
    return User::find(2)->name;
});



