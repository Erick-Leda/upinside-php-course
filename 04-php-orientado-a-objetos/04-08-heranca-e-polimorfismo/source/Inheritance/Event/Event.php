<?php


namespace Source\Inheritance\Event;


class Event
{

    private $event;
    private $date;
    private $price;

    private $register;
    protected $vacancies;

    /**
     * Event constructor.
     *
     * @param $event
     * @param $date
     * @param $price
     * @param $vacancies
     */
    public function __construct($event, \DateTime $date, $price, $vacancies)
    {
        $this->event     = $event;
        $this->date      = $date;
        $this->price     = $price;
        $this->vacancies = $vacancies;
    }

    public function register($fullname, $email)
    {
        if ($this->vacancies >= 1){
            $this->vacancies -=1;
            $this->setRegister($fullname, $email);
            echo "<p class='trigger accept'>Parabéns {$fullname}, vaga garantida!</p>";
        }else{
            echo "<p class='trigger error'>Desculpe {$fullname}, mas as vagas esgotaram!</p>";
        }
    }

    /**
     * @param   mixed  $register
     */
    protected function setRegister($fullname, $email): void
    {
        $this->register = [
            "name" => $fullname,
            "email" => filter_var($email, FILTER_VALIDATE_EMAIL)
        ];
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date->format("d/m/Y H:i");
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return number_format($this->price, '2', ',', '.');
    }

    /**
     * @return mixed
     */
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * @return mixed
     */
    public function getVacancies()
    {
        return $this->vacancies;
    }


}