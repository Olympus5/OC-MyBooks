<?php

namespace MyBooks\Domain;

/**
 * @author Olympus5
 */
class Author {
  /**
   * Author id
   * @var integer
   */
  private $id;

  /**
   * Author first name
   * @var string
   */
  private $firstName;

  /**
   * Author last name
   * @var string
   */
  private $lastName;

  /**
   * Getter
   * @return Author id
   */
  public function getId() {
    return $this->id
  }

  /**
   * Setter
   * @param id Author id
   * @return Author
   */
  public function setId($id) {
    $this->id = $id;
    return $this;
  }

  /**
   * Getter
   * @return Author first name
   */
  public function getFirstName() {
    return $this->firstName;
  }

  /**
   * Setter
   * @param firstName Author first name
   * @return Author
   */
  public function setFirstName($firstName) {
    $this->firstName = $firstName;
    return $this;
  }

  /**
   * Getter
   * @return Author last name
   */
  public function getLastName() {
    return $this->lastName;
  }

  /**
   * Setter
   * @param lastName Author last name
   * @return Author
   */
  public function setLastName($lastName) {
    $this->lastName = $lastName;
    return $this;
  }
}
