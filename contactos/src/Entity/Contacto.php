<?php



namespace App\Entity;



use App\Repository\ContactoRepository;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Validator\Constraints\Email;

#[ORM\Entity(repositoryClass: ContactoRepository::class)]

class Contacto

{

    #[ORM\Id]

    #[ORM\GeneratedValue]

    #[ORM\Column]

    private ?int $id = null;



    #[ORM\Column(length: 255)]

    #[Assert\NotBlank(message: 'El nombre es obligatorio')]

    private ?string $nombre = null;



    #[ORM\Column(length: 15)]

    #[Assert\NotBlank(message: 'El teléfono es obligatorio')]

    private ?string $telefono = null;



    #[ORM\Column(length: 255)]

    #[Assert\NotBlank(message: 'El correo es obligatorio')]

    #[Assert\Email(message: 'Correo no válido')]

    private ?string $email = null;



    #[ORM\ManyToOne(inversedBy: 'contactos')]

    #[Assert\NotBlank(message: 'La provincia es obligatoria')]

    private ?Provincia $provincia = null;



    public function getId(): ?int

    {

        return $this->id;

    }



    public function getNombre(): ?string

    {

        return $this->nombre;

    }



    public function setNombre(string $nombre): static

    {

        $this->nombre = $nombre;



        return $this;

    }



    public function getTelefono(): ?string

    {

        return $this->telefono;

    }



    public function setTelefono(string $telefono): static

    {

        $this->telefono = $telefono;



        return $this;

    }



    public function getEmail(): ?string

    {

        return $this->email;

    }



    public function setEmail(string $email): static

    {

        $this->email = $email;



        return $this;

    }



    public function getProvincia(): ?Provincia

    {

        return $this->provincia;

    }



    public function setProvincia(?Provincia $provincia): static

    {

        $this->provincia = $provincia;



        return $this;

    }

}
