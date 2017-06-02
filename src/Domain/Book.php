<?php

namespace MyBooks\Domain;

/**
 * @author Olympus5
 */
class Book {
  /**
   * Book id
   * @var integer
   */
  private $id;

  /**
   * Book title
   * @var string
   */
  private $title;

  /**
   * Book isbn
   * @var string
   */
  private $isbn;

  /**
   * Book summary
   * @var string
   */
  private $summary;

  /**
   * Associated author
   * @var \MyBooks\Domain\Author
   */
  private $author;

  /**
   * Getter
   * @return Book id
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Setter
   * @param id Book id
   * @return Book
   */
  public function setId($id) {
    $this->id = $id;
    return $this;
  }

  /**
   * Getter
   * @return Book title
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * Setter
   * @param title Book title
   * @return Book
   */
  public function setTitle($title) {
    $this->title = $title;
    return $this;
  }

  /**
   * Getter
   * @return Book isbn
   */
  public function getIsbn() {
    return $this->isbn;
  }

  /**
   * Setter
   * @param isbn Book isbn
   * @return Book
   */
  public function setIsbn($isbn) {
    $this->isbn = $isbn;
    return $this;
  }

  /**
   * Getter
   * @return Book summary
   */
  public function getSummary() {
    return $this->summary;
  }

  /**
   * Setter
   * @param summary Book summary
   * @return Book
   */
  public function setSummary($summary) {
    $this->summary = $summary;
    return $this;
  }

  /**
   * Getter
   * @return Associated author
   */
  public function getAuthor() {
    return $this->author;
  }

  /**
   * Setter
   * @param author Associated author
   * @return Book
   */
  public function setAuthor($author) {
    $this->author = $author;
    return $this;
  }
}
