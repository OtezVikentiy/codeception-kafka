<?php

declare(strict_types=1);

namespace OtezVikentiy\Codeception\Extension\MessageSerializer;

interface MessageSerializerInterface
{
    public function serialize($dto);
}
