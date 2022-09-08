<?php

namespace classes\interfaces;

interface CreateTvInterface {
    public function createLg(): AbstractLgInterface;
    public function createSony(): AbstractSonyInterface;
}
