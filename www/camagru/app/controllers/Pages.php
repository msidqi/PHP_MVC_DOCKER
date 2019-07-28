<?php


class Pages extends Controller {
	private $postModel;

	public function __construct(){
		$this->postModel = $this->model('Post');
	}

	public function index(){
		$posts = $this->postModel->getPosts();
		
		$data = [
			'title' => 'index page',
			'posts' => $posts
		];

		$this->view('pages/index', $data);
	}

    public function about(){
		$data = [
			'title' => 'about page'
		];
		$this->view('pages/about', $data);
	}
}