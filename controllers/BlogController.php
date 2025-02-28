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
    public function store() {
        $data = $_POST["content"];
        Blog::create(["content" => $data]);
        header("Location: /");
    }

    public function destroy() {
        $id = $_POST["id"];
        Blog::delete($id);
        header("Location: /");
    }





}
