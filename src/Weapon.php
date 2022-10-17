<?php

class Weapon
{
    private int $damage = 10;
    private string $image = 'sword.svg';




    public function getDamage(): int
    {
        return $this->damage;
    }
    
    
    public function setDamage($damage): self
    {
        $this->damage = $damage;

        return $this;
    }



    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }
}


