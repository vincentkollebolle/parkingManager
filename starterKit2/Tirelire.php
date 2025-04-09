<?php
class Tirelire
{
    private int $total = 0;

    public function addMoney(int $amount)
    {
        $this->total += $amount;
    }
}