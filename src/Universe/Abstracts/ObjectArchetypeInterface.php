<?php declare(strict_types=1);
/**
 * HyDIS Framework
 * 
 * This file is part of the HyDIS Framework. The license file can
 * be found at the root directory of this repository.
 * 
 * (c) 2018 Matthias 'nhlm' Kaschubowski
 */
namespace Pulsar\Universe\Abstracts;

interface ObjectArchetypeInterface {
    /**
     * returns whether the object is mutable or immutable.
     * 
     * @return bool
     */
    public function isMutable(): bool;
}