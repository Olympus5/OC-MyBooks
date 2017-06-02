<?php
namespace MyBooks\DAO;

use Doctrine\DBAL\Connection;

/**
 * @author Olympus5
 */
abstract class DAO {

  /**
   * Database connection
   * @var \Doctrine\DBAL\Connection
   */
  private $db;

  /**
   * Constructor
   * @param \Doctrine\DBAL\Connection The database connection object
   */
  public function __construct(Connection $db) {
    $this->db = $db;
  }

  /**
   * Grants acces to the database connection object
   * @return The database connection object
   */
  protected function getDb() {
    return $this->db;
  }

  /**
   * Builds a domain object from a DB row
   * Must be overwritten by child classes
   */
  protected abstract function buildDomainObject(array $row);
}
