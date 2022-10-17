<?php 


class shield {
    private int $protection = 10;
    private string $image = 'shield.svg';


    public function getProtection(): int
    {
        return $this->protection;
    }

    public function setProtection($protection): self
    {
        $this->protection = $protection;

        return $this;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }






}

