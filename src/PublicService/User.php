<?php

namespace Holmang\Tradera\PublicService;

class User
{
    public $Id;
    public $Alias;
    public $FirstName;
    public $LastName;
    public $Email;
    public $TotalRating;
    public $PhoneNumber;
    public $MobilePhoneNumber;
    public $Address;
    public $ZipCode;
    public $City;
    public $CountryName;
    public $TransactionId;
    public $Login;
    public $Password;

    public function __construct($user = null)
    {
        if ($user) {
            $this->Id = isset($user->Id) ? $user->Id : null;
            $this->Alias = isset($user->Alias) ? $user->Alias : null;
            $this->FirstName = isset($user->FirstName) ? $user->FirstName : null;
            $this->LastName = isset($user->LastName) ? $user->LastName : null;
            $this->Email = isset($user->Email) ? $user->Email : null;
            $this->TotalRating = isset($user->TotalRating) ? $user->TotalRating : null;
            $this->PhoneNumber = isset($user->PhoneNumber) ? $user->PhoneNumber : null;
            $this->MobilePhoneNumber = isset($user->MobilePhoneNumber) ? $user->MobilePhoneNumber : null;
            $this->Address = isset($user->Address) ? $user->Address : null;
            $this->ZipCode = isset($user->ZipCode) ? $user->ZipCode : null;
            $this->City = isset($user->City) ? $user->City : null;
            $this->CountryName = isset($user->CountryName) ? $user->CountryName : null;
            $this->TransactionId = isset($user->TransactionId) ? $user->TransactionId : null;
            $this->Login = isset($user->Login) ? $user->Login : null;
            $this->Password = isset($user->Password) ? $user->Password : null;
        }
    }


}