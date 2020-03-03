<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LoginRepository")
 */
class LoggedIn
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    private $text = "Eu volutpat odio facilisis mauris. Aliquam purus sit amet luctus venenatis lectus magna fringilla urna. Laoreet id donec ultrices tincidunt arcu. Tortor at auctor urna nunc id. Nunc congue nisi vitae suscipit tellus. Placerat vestibulum lectus mauris ultrices eros. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Eu sem integer vitae justo eget magna fermentum.";
    private $name = "Unknown1";

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getText() :string
    {
        return $this->text;
    }
}