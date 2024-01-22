<?php 
namespace app\core;
 
 class Field  {
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';
    public  string $type;
    public string $attribute;


    public function __construct(string $attribute){
        $this->type = self::TYPE_TEXT;
        $this->attribute = $attribute;
    }
    public function __toString()
    {
        return sprintf('
        <div class="form-group">
        <label >%s</label>
        <br>
        <input type="%s" name="%s" >
        </div>',
        $this->getLabel($this->attribute),
        $this->type,
        $this->attribute
    );
    }
    public function passwordField(){
        $this ->type = self::TYPE_PASSWORD;
        return $this;
    }
    public function lables():array{
        return [
            'firstname' => 'first name',
            'lastname' => 'last name',
            'email' => 'email',
            'password' => 'password',
            'confirmPassword' => 'confirm Password'
        ];
             
    }
    public function getLabel($attribute){
        return $this->lables()[$attribute] ?? $attribute;
    }
 }
