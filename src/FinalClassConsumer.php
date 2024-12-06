<?php

declare(strict_types=1);

namespace SBUERK\RepoOld;

final class FinalClassConsumer
{
    private FinalClass $finalClass;

    public function __construct()
    {
        $this->finalClass = new FinalClass();
    }

    public function test(): string
    {
        return $this->finalClass->test();
    }
}