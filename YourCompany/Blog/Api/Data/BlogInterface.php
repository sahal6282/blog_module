<?php
namespace YourCompany\Blog\Api\Data;

interface BlogInterface
{
    const ID = 'id';
    const TITLE = 'title';
    const DESCRIPTION = 'description';
    const STATUS = 'status';

    public function getId();
    public function getTitle();
    public function getDescription();
    public function getStatus();

    public function setId($id);
    public function setTitle($title);
    public function setDescription($description);
    public function setStatus($status);
}
