<?php


namespace Source\Interpretation;


class User
{
    private $firstName;
    private $lastName;
    private $email;

    /**
     * User constructor.
     *
     * @param $firstName
     * @param $lastName
     * @param $email
     */

    public function __construct($firstName, $lastName, $email)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        $this->email     = $email;
    }

    public function __clone()
    {
        $this->firstName = null;
        $this->lastName = null;
        echo "<p class='trigger'>Clonou!</p>";
    }

    public function __destruct()
    {
        var_dump($this);
        echo "<p class='trigger accept'>O objeto {$this->firstName} 
                foi destruído</p>";
    }


    /**
     * @param   mixed  $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param   bool|mixed  $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param   mixed|null  $email
     */
    public function setEmail(?mixed $email): void
    {
        $this->email = $email;
    }


    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }



}