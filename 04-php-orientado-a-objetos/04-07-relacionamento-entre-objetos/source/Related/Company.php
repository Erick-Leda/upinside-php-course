<?php


namespace Source\Related;


class Company
{
    //propriedades de uma companhia
    private $company;

    /**
     * @var Address
     */
    private $address;

    private $team;
    private $products;

    //Função sem associação
    public function bootCompany($company, $address)
    {
        $this->company = $company;
        $this->address = $address;
    }

    //Função com associação(o parâmetro address está apontando para o objeto Address
    //, a propriedade $address serve apenas de ponteiro para o objeto da classe Address)
    public function boot($company, Address $address)
    {
        $this->company = $company;
        $this->address = $address;
    }

    // Função com agregação(o parâmetro product está agregando os valores do
    // objeto da classe Product)
    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    //Função com composição(os parâmetros $job, $fN e $lN tem seu comportamento
    //construído e é instanciado dentro da classe Company. E só existe se Company existir)
    public function addTeamMember($job, $firstName, $lastName)
    {
        $this->team[] = new User($job, $firstName, $lastName);
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }
}