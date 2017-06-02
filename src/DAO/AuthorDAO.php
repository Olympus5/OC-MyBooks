<?php

namespace MyBooks\DAO;

use MyBooks\Domain\Author;

/**
 * @author Olympus5
 */
class AuthorDAO extends DAO {
  /**
   * Returns an author matching the supplied id.
   * @param id Author id
   * @return An exception if no matching author is found
   */
    public function find($id) {
      $sql = 'SELECT * FROM author WHERE auth_id=?;';

      $row = $this->getDb()->fetchAssoc($sql, array($id));

      if($row)
        $author = $this->buildDomainObject($row);
      else
        throw new \Exception('No author matching id '.$id);

      return $author;
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
