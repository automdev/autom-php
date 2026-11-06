<?php

declare(strict_types=1);

namespace Autom\Exception;

/**
 * A request value cannot be represented safely on the wire.
 */
final class SerializationException extends AutomException
{
    public function __construct(string $message, public readonly ?string $param = null, ?\Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
