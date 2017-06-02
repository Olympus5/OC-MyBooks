<?php

namespace MyBooks\DAO;

use MyBooks\Domain\Book;

/**
 * @author Olympus5
 */
class BookDAO extends DAO {

  /**
   * @var \MyBooks\DAO\AuthorDAO
   */
  private $authorDAO;
  
  public function setAuthorDAO(AuthorDAO $authorDAO) {
    $this->authorDAO = $authorDAO;
  }

  /**
   * Return list of all author, sorted by date (most recent first)
   * @return A list of all author
   */
  public function findAll() {
    $sql = 'SELECT book_id, book_title, book_summary
            FROM book
            ORDER BY book_id DESC;';

    $result = $this->getDb()->fetchAll($sql);

    $books = array();

    foreach($result as $row) {
      $book = $this->buildDomainObject($row);
      $books[$row['book_id']] = $book;
    }

    return $books;
  }

  /**
   * Returns an book matching the supplied id.
   * @param id Book id
   * @return An exception if no matching book is found
   */
  public function find($id) {
    $sql = 'SELECT * FROM book WHERE book_id=?';

    $row = $this->getDb()->fetchAssoc($sql, array($id));

    if($row) {
      $book = $this->buildDomainObject($row);
    } else {
      throw new \Exception('No book matching id '.$id);
    }

    return $book;
  }

  /**
   * Create an Author object based on a DB row
   * @param row The DB row contain Author data
   * @return Author object
   */
  public function buildDomainObject(array $row) {
    $book = new Book();

    $book->setId($row['book_id']);
    $book->setTitle($row['book_title']);
    $book->setSummary($row['book_summary']);

    if(array_key_exists('book_isbn', $row)) {
      $book->setIsbn($row['book_isbn']);
    }

    if(array_key_exists('auth_id', $row)) {
      $authorId = $row['auth_id'];
      $author = $this->authorDAO->find($authorId);
      $book->setAuthor($author);
    }

    return $book;
  }
}
