<?php

    class Libro extends Model {

        public $title; 
        public $author;
        public $isbn;
        public $price;
        public $format;
        public $publisher;
        public $pubdate;
        public $genre;
        public $image;

        public function __construct() {
            parent::__construct();
        }

        public function insert($data) {
            try {
                $query = $this->db->connect()->prepare('INSERT INTO libros (title, author, isbn, price, format, publisher, pubdate, genre, image) VALUES (:booktitle, :bookauthor, :bookisbn, :bookprice, :bookformat, :bookpublisher, :bookpubdate, :bookgenre, :bookimage)');
                $query->execute(['booktitle' => $data['booktitle'], 'bookauthor' => $data['bookauthor'], 'bookisbn' => $data['bookisbn'], 'bookprice' => $data['bookprice'], 'bookformat' => $data['bookformat'], 'bookpublisher' => $data['bookpublisher'], 'bookpubdate' => $data['bookpubdate'], 'bookgenre' => $data['bookgenre'], 'bookimage' => $data['bookimage']]);
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function getall() {
            $items = [];

            try {
                $query = $this->db->connect()->query('SELECT * FROM libros');

                while ($row = $query->fetch()) {
                    $book = new Libro();
                    $book->title       = $row['title'];
                    $book->author      = $row['author'];
                    $book->isbn        = $row['isbn'];
                    $book->price       = $row['price'];
                    $book->format      = $row['format'];
                    $book->publisher   = $row['publisher'];
                    $book->pubdate     = $row['pubdate'];
                    $book->genre       = $row['genre'];
                    $book->image       = $row['image'];

                    array_push($items, $book);
                }

                return $items;
            } catch (PDOException $e) {
                return [];
            }
        }

        public function getbook($isbn) {
            try {
                $u = new Libro();
                $query = $this->db->connect()->prepare('SELECT * FROM libros WHERE isbn=:isbn');
                $query->execute(['isbn' => $isbn]);
                while ($row = $query->fetch()) {
                    $u->title       = $row['title'];
                    $u->author      = $row['author'];
                    $u->isbn        = $row['isbn'];
                    $u->price       = $row['price'];
                    $u->format      = $row['format'];
                    $u->publisher   = $row['publisher'];
                    $u->pubdate     = $row['pubdate'];
                    $u->genre       = $row['genre'];
                    $u->image       = $row['image'];
                }

                return $u;
            } catch (PDOException $e) {
                return [];
            }
        }

        public function update($data) {
            try {
                $query = $this->db->connect()->prepare("UPDATE libros SET title=:title, author=:author, price=:price, format=:format, publisher=:publisher, pubdate=:pubdate, genre=:genre WHERE isbn=:isbn");
                $query->execute(['title' => $data['title'], 'author' => $data['author'], 'price' => $data['price'], 'format' => $data['format'], 'publisher' => $data['publisher'], 'pubdate' => $data['pubdate'], 'genre' => $data['genre'], 'isbn' => $data['isbn']]);

                return true;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function updateimage($data) {
            try {
                $query = $this->db->connect()->prepare("UPDATE libros SET image=:image WHERE isbn=:isbn");
                $query->execute(['image' => $data['image'], 'isbn' => $data['isbn']]);

                return true;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function delete($data) {
            try {
                $query = $this->db->connect()->prepare("DELETE FROM libros WHERE isbn=:isbn");
                $query->execute(['isbn' => $data['isbn']]);

                return true;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function getbooksregex($param) {
            try {
                $squery = '%' . $param . '%';
                $query = $this->db->connect()->prepare("SELECT * FROM libros WHERE title LIKE :param or author LIKE :param2");
                $query->execute(['param' => $squery, 'param2' => $squery]);
                
                $items = [];
                while ($row = $query->fetch()) {
                    $book = new Libro();
                    $book->title       = $row['title'];
                    $book->author      = $row['author'];
                    $book->isbn        = $row['isbn'];
                    $book->price       = $row['price'];
                    $book->format      = $row['format'];
                    $book->publisher   = $row['publisher'];
                    $book->pubdate     = $row['pubdate'];
                    $book->genre       = $row['genre'];
                    $book->image       = $row['image'];

                    array_push($items, $book);
                }

                return $items;
            } catch(PDOException $e) {
                return [];
            }            
        }

        public function getgenres() {
            try {
                $query = $this->db->connect()->query("SELECT genre FROM libros");
                
                $items = [];
                while ($row = $query->fetch()) {
                    if (!in_array($row, $items, true))
                        array_push($items, $row);
                }

                return $items;
            } catch(PDOException $e) {
                return [];
            }
        }

        public function getbygenre($genre) {
            try {
                $query = $this->db->connect()->prepare("SELECT * FROM libros WHERE genre=:genre");
                $query->execute(['genre' => $genre]);
                
                $items = [];
                while ($row = $query->fetch()) {
                    $book = new Libro();
                    $book->title       = $row['title'];
                    $book->author      = $row['author'];
                    $book->isbn        = $row['isbn'];
                    $book->price       = $row['price'];
                    $book->format      = $row['format'];
                    $book->publisher   = $row['publisher'];
                    $book->pubdate     = $row['pubdate'];
                    $book->genre       = $row['genre'];
                    $book->image       = $row['image'];

                    array_push($items, $book);
                }

                return $items;
            } catch(PDOException $e) {
                return [];
            } 
        }

        public function getrandombook() {
            try {
                $query = $this->db->connect()->query('SELECT * FROM libros ORDER BY RAND() LIMIT 1');
                $book = new Libro();

                while ($row = $query->fetch()) {
                    $book->title       = $row['title'];
                    $book->author      = $row['author'];
                    $book->isbn        = $row['isbn'];
                    $book->price       = $row['price'];
                    $book->format      = $row['format'];
                    $book->publisher   = $row['publisher'];
                    $book->pubdate     = $row['pubdate'];
                    $book->genre       = $row['genre'];
                    $book->image       = $row['image'];
                }

                return $book;
            } catch (PDOException $e) {
                return null;
            }
        }

        public function getstats() {
            try {
                $query = $this->db->connect()->query('SELECT COUNT(*) FROM libros');
                $noofbooks = $query->fetch()[0];

                $query = $this->db->connect()->query('SELECT COUNT(DISTINCT(author)) FROM libros');
                $noofauthors = $query->fetch()[0];

                $query = $this->db->connect()->query('SELECT COUNT(DISTINCT(format)) FROM libros');
                $noofformats = $query->fetch()[0];

                $query = $this->db->connect()->query('SELECT COUNT(DISTINCT(genre)) FROM libros');
                $noofgenres = $query->fetch()[0];

                $query = $this->db->connect()->query('SELECT COUNT(DISTINCT(publisher)) FROM libros');
                $noofpublishers = $query->fetch()[0];

                return [
                    'noofbooks' => $noofbooks,
                    'noofauthors' => $noofauthors,
                    'noofformats' => $noofformats,
                    'noofgenres' => $noofgenres,
                    'noofpublishers' => $noofpublishers
                ];
            } catch (PDOException $e) {
                return [];
            }
        }

        public function gettopauthors() {
            try {
                $authors = [];
                
                $query = $this->db->connect()->query('SELECT author FROM libros GROUP BY author ORDER BY author DESC LIMIT 3');
                while ($row = $query->fetch()) {
                    array_push($authors, $row[0]);
                }

                return $authors;
            } catch (PDOException $e) {
                return [];
            }
        }
    }

?>