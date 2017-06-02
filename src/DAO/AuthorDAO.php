<?php

namespace MyBooks\DAO;

use MyBooks\Domain\Author;

/**
 * @author Olympus5
 */
class AuthorDAO extends DAO {

  /**
   * Return list of all author, sorted by date (most recent first)
   * @return A list of all author
   */
  public function findAll() {
    $sql = 'SELECT * FROM t_author ORDER BY auth_id DESC;';

    $result = $this->getDb()->fetchAll($sql);

    $authors = array();

    foreach($result as $row) {
      $author = buildDomainObject($row);
      array[$row['auth_id']] = $author;
    }
  }

  /**
   * Create an Author object based on a DB row
   * @param row The DB row contain Author data
   * @return Author object
   */
  public function buildDomainObject(array $row) {
    $author = new Author();
    $author->setId($row['auth_id']);
    $author->setFirstName($row['auth_first_name']);
    $author->setLastName($row['auth_last_name']);

    return $author;
  }
}
