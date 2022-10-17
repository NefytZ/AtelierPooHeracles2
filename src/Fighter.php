<?php


class Fighter
{
    public const MAX_LIFE = 100;

    private string $name;

    private int $strength;
    private int $dexterity;
    private string $image;
    
    private ?Shield $shield = null;
    private ?Weapon $weapon = null;
    private int $life = self::MAX_LIFE;
    
    public function __construct(
        string $name,
        int $strength = 10,
        int $dexterity = 5,
        string $image = 'fighter.svg'
    ) {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->image = $image;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }



    public function fight(Fighter $adversary): void
    {
        $damage = rand(1, $this->getDamage()) - $adversary->getDefense();
        if ($damage < 0) {
            $damage = 0;
        }
        $adversary->setLife($adversary->getLife() - $damage);
    }


    /**
     * Get the value of life
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @return  self
     */
    public function setLife($life)
    {
        if($life < 0) {
            $life = 0;
        }
        $this->life = $life;

        return $this;
    }

    public function isAlive(): bool
    {
        return $this->getLife() > 0;
    }

    /**
     * Get the value of strength
     */
    public function getStrength()
    {
        return $this->strength;
    }


    public function getShield(): ?Shield
    {
        return $this->shield;
    }

  
    public function setShield(Shield $shield): self
    {
        $this->shield = $shield;

        return $this;
    }


    /**
     * Set the value of strength
     *
     * @return  self
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get the value of dexterity
     */
    public function getDexterity()
    {
        return $this->dexterity;
    }

    /**
     * Set the value of dexterity
     *
     * @return  self
     */
    public function setDexterity($dexterity)
    {
        $this->dexterity = $dexterity;

        return $this;
    }

    public function getWeapon(): ?Weapon
    {
        return $this->weapon;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }

    public function getDamage()
    {
        $damage = $this->getStrength();
        if ($this->getWeapon() instanceof Weapon) {
            $damage = $this->getStrength() + $this->getWeapon()->getDamage();
        }
        return $damage;
    }

    public function getDefense()
    {
        $defense = $this->getDexterity();
        if ($this->getShield()) {
            $defense = $this->getDexterity() + $this->getShield()->getProtection();
        }
        return $defense;
    }





}


    

    



