<?php


namespace Source\Interpretation;


class Product
{
    public $name;
    private $price;
    private $data;

    /**
     * Product constructor.
     *
     * @param $name
     * @param $price
     * @param $data
     */
    public function __construct($name="", $price=1997, $data)
    {
        $this->name  = $name;
        $this->price = $price;
        $this->data  = $data;
    }


    public function __set($name, $value)
    {
        $this->notFound(__FUNCTION__, $name);
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if (!empty($this->data[$name])){
            return $this->data[$name];
        } else {
            $this->notFound(__FUNCTION__, $name);

        }
    }

    public function __isset($name)
    {
        $this->notFound(__FUNCTION__, $name);
    }

    public function __call($name, $arguments)
    {
        $this->notFound(__FUNCTION__, $name);
        var_dump($arguments);
    }

    public function __toString()
    {
        return "<p class='trigger'>Este é um objeto da class ".__CLASS__."</p>";
    }

    public function __unset($name)
    {
        trigger_error(__FUNCTION__.": Acesso Negado a propriedade 
        {$name}", E_USER_ERROR);
    }

    public function __sleep()
    {
        echo "É chamada quando a função serialize() é chamada fora da classe.<br>";
        $this->name = base64_encode($this->name);
        return array('name', 'price');
    }

    public function __wakeup()
    {
        echo "É chamado quando a função unserialize() é chamada fora da classe.<br>";
        $this->name = 'FSPHP';
        $this->price = '1997';
    }

    public function __invoke()
    {
        echo "<p class='trigger error'>Isto é um objeto</p>";
    }

    public function __debugInfo()
    {
        return [
            'parcelas'=> $this->price / 10,
        ];
    }

    public static function __set_state($an_array)
    {
        $a = new Product();
        $a->name = $an_array['name'];
        return $a;
    }


    public function handler($name, $price)
    {
        $this->name = $name;
        $this->price = number_format($price, "2", ".",
            ",");
    }

    private function notFound($method, $name)
    {
        echo "<p class='trigger error'>{$method}: A propriedade {$name} não 
                existe em ".__CLASS__."</p>";
    }
}