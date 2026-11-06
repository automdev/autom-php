<?php

declare(strict_types=1);

namespace Autom\Exception;

use Autom\RawResponse;

/**
 * A successful response could not be decoded as the documented representation.
 */
final class ResponseDecodingException extends AutomException
{
    public function __construct(string $message, public readonly RawResponse $rawResponse)
    {
        parent::__construct($message);
    }
}
