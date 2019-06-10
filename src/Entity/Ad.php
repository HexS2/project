<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 09/06/2019
 * Time: 15:53
 */

namespace App\Entity;


class Ad
{
private $id;
private $title;
private $textContent;
private $price;

    /**
     * Ad constructor.
     * @param $id
     * @param $title
     * @param $textContent
     * @param $price
     */
    public function __construct($id, $title, $textContent, $price)
    {
        $this->id = $id;
        $this->title = $title;
        $this->textContent = $textContent;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTextContent()
    {
        return $this->textContent;
    }

    /**
     * @param mixed $textContent
     */
    public function setTextContent($textContent): void
    {
        $this->textContent = $textContent;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }



}