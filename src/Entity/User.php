<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity=UserHistory::class, mappedBy="user_id")
     */
    private $userHistory;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\OneToMany(targetEntity=UrlShortener::class, mappedBy="user_id")
     */
    private $urlShorteners;

    /**
     * @ORM\OneToMany(targetEntity=Memos::class, mappedBy="user_id")
     */
    private $memos;

    public function __construct()
    {
        $this->userHistory = new ArrayCollection();
        $this->urlShorteners = new ArrayCollection();
        $this->memos = new ArrayCollection();
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection|UserHistory[]
     */
    public function getUserHistory(): Collection
    {
        return $this->userHistory;
    }

    public function addUserHistory(UserHistory $userHistory): self
    {
        if (!$this->userHistory->contains($userHistory)) {
            $this->userHistory[] = $userHistory;
            $userHistory->setUserId($this);
        }

        return $this;
    }

    public function removeUserHistory(UserHistory $userHistory): self
    {
        if ($this->userHistory->removeElement($userHistory)) {
            // set the owning side to null (unless already changed)
            if ($userHistory->getUserId() === $this) {
                $userHistory->setUserId(null);
            }
        }

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection|UrlShortener[]
     */
    public function getUrlShorteners(): Collection
    {
        return $this->urlShorteners;
    }

    public function addUrlShortener(UrlShortener $urlShortener): self
    {
        if (!$this->urlShorteners->contains($urlShortener)) {
            $this->urlShorteners[] = $urlShortener;
            $urlShortener->setUserId($this);
        }

        return $this;
    }

    public function removeUrlShortener(UrlShortener $urlShortener): self
    {
        if ($this->urlShorteners->removeElement($urlShortener)) {
            // set the owning side to null (unless already changed)
            if ($urlShortener->getUserId() === $this) {
                $urlShortener->setUserId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Memos[]
     */
    public function getMemos(): Collection
    {
        return $this->memos;
    }

    public function addMemo(Memos $memo): self
    {
        if (!$this->memos->contains($memo)) {
            $this->memos[] = $memo;
            $memo->setUserId($this);
        }

        return $this;
    }

    public function removeMemo(Memos $memo): self
    {
        if ($this->memos->removeElement($memo)) {
            // set the owning side to null (unless already changed)
            if ($memo->getUserId() === $this) {
                $memo->setUserId(null);
            }
        }

        return $this;
    }
}
