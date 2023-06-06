<?php


class WriteMessages{
    
    private string $name;
    private string $surname;


    public function __construct(string $recievedName,  string $recivedSurname)
    {
        $this->name = $recievedName;
        $this->surname = $recivedSurname;
    }

    public function writeAllMessages():string
    {
        $this->writeHelloWord();
        $this->writeSecondHelloWord();
        return "<br> this is a test ";
    }


    public function writeHelloWord():void
    {
        echo("hello there". $this->name ." ". $this->surname .". <br>");
    }

    public function writeSecondHelloWord():void
    {
        echo("hello ". $this->name ."your surname is : ".  $this->surname."<br>");    
    }

}

?>

