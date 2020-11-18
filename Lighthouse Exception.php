{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Trait.')}}
<?php

namespace {{=$.NAMESPACE}};

use Exception;
use Nuwave\Lighthouse\Exceptions\RendersErrorsExtensions;

class {{=$.NAME}} extends Exception implements RendersErrorsExtensions
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }

    /**
     * Returns true when exception message is safe to be displayed to a client.
     *
     * @api
     * @return bool
     */
    public function isClientSafe(): bool
    {
        return true;
    }

    /**
     * Returns string describing a category of the error.
     *
     * Value "graphql" is reserved for errors produced by query parsing or validation, do not use it.
     *
     * @api
     * @return string
     */
    public function getCategory(): string
    {
        return 'internal-error';
    }

    /**
     * Return the content that is put in the "extensions" part
     * of the returned error.
     *
     * @return array
     */
    public function extensionsContent(): array
    {
        return [
            // ...
        ];
    }
}