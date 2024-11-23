<?php
require_once 'app/models/Film.php';

class FilmController {
    private $film;

    public function __construct() {
        $this->film = new Film();
    }

    public function index()
    {
        $films = $this->film->getAll();
        $view = 'app/views/films/index.php';
        include 'app/views/layout.php';
    }


    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $genre = $_POST['genre'];
            $year = $_POST['year'];
            $this->film->create($title, $genre, $year);
            header('Location: /film/');
        }
        $view = 'app/views/films/create.php';
        include 'app/views/layout.php';
    }

    public function delete($id) {
        $this->film->delete($id);
        header('Location: /film/');
    }
}

?>
