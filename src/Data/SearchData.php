<?php


namespace App\Data;
use App\Entity\Specialite;



class SearchData
{
    /**
     * @var int
     */
    public $page = 1;

    /**
     * @var string
     */
    public $q = '';

    /**
     * @var Specialite[]
     */
    public $Specialite = [];



}