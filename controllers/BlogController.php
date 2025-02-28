<?php
require "models/Blog.php";
class BlogController {
    public function index() {
        $posts = Blog::all();
        require "views/blog/index.view.php";
    }

    public function show() {
        $id=$_GET["id"];
        $post = Blog::find($id);
        require "views/blog/show.view.php";
    }

    public function create() {
        require "views/blog/create.view.php";
    }



}
