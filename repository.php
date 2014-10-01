<?php

class Post {
	public $id;
	public $title;
	public $content;
	public $deleted;

	function __construct($i, $t, $c) {
		$this->id = $i;
		$this->title = $t;
		$this->content = $c;
		$this->deleted = false;
    }
}

class FileRepo {

	public $dir;

	function __construct($d) {
		$this->dir = getcwd() . "\\" . $d;
		print($this->dir);
    }

	public function save($p) {
		$s_p = serialize($p);
		$file = $p->title;
		$current = file_get_contents($this->dir . "\\" . $file);
		print($current);
		$current = $s_p;
		file_put_contents($this->dir . "\\" . $file, $current);
		return $p;
	}

	public function read($title) {
		$file = $title;
		$current = file_get_contents($this->dir . "\\" . $file);
		$d_p = unserialize($current);
		return $d_p;
	}
}

class Repository {

	public $repo;

	function __construct($r) {
		$this->repo = $r;
    }

	public function insert($p) {
		$this->repo->save($p);
		return $p;
	}

	public function update($p) {
		$this->repo->save($p);
		return $p;
	}

	public function delete($p) {
		$p->deleted = true;
		$this->repo->save($p);
		return $p;
	}

	public function find($title) {
		$p = $this->repo->read($title);
		return $p;
	}

	public function all() {
		return $array;
	}
}

// TODO sample
// $r = new Repository(new FileRepo("hoge"));
// $p = new Post(1, "title1", "あるよ");
// $r->insert($p);
// $p->content = "ないよ";
// $r->update($p);
// $r->delete($p);
// $p1 = $r->find("title1");
// print_r($p1);
