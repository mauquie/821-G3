<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 *	fields= {"email"},
 *	message= "L'email que vous avez indiqué est déjà utilisé !"
 *)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $username;

    /** 
	*@ORM\Column(type="string", length=255) 
	*@Assert\Length(min="8", minMessage="votre mot de passe est trop court")
	*@Assert\EqualTo(propertyPath="confirm_password", message="Vous n’avez pas tapé le même mot de passe")
	*/
    private $password;
    
    public $confirm_password;

    /**
     * @ORM\Column(type="integer")
     */
    private $role;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Tickets", mappedBy="user")
     */
    private $tickets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Chat", mappedBy="user")
     */
    private $chats;

    public function __construct()
    {
        $this->tickets = new ArrayCollection();
        $this->chats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
	
	
	
	public function eraseCredentials()
                                                    {
                                                
                                                    }
	
		public function getsalt()
    {

    }
	
		public function getRoles()
    {
		return ['ROLE_USER'];
    }

  public function getRole(): ?int
  {
      return $this->role;
  }

  public function setRole(string $role): self
  {
      $this->role = $role;

      return $this;
  }

  /**
   * @return Collection|Tickets[]
   */
  public function getTickets(): Collection
  {
      return $this->tickets;
  }

  public function addTicket(Tickets $ticket): self
  {
      if (!$this->tickets->contains($ticket)) {
          $this->tickets[] = $ticket;
          $ticket->setUser($this);
      }

      return $this;
  }

  public function removeTicket(Tickets $ticket): self
  {
      if ($this->tickets->contains($ticket)) {
          $this->tickets->removeElement($ticket);
          // set the owning side to null (unless already changed)
          if ($ticket->getUser() === $this) {
              $ticket->setUser(null);
          }
      }

      return $this;
  }

  /**
   * @return Collection|Chat[]
   */
  public function getChats(): Collection
  {
      return $this->chats;
  }

  public function addChat(Chat $chat): self
  {
      if (!$this->chats->contains($chat)) {
          $this->chats[] = $chat;
          $chat->setUser($this);
      }

      return $this;
  }

  public function removeChat(Chat $chat): self
  {
      if ($this->chats->contains($chat)) {
          $this->chats->removeElement($chat);
          // set the owning side to null (unless already changed)
          if ($chat->getUser() === $this) {
              $chat->setUser(null);
          }
      }

      return $this;
  }

}
