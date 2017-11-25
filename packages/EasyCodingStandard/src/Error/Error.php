<?php declare(strict_types=1);

namespace Symplify\EasyCodingStandard\Error;

final class Error
{
    /**
     * @var int
     */
    private $line;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $sourceClass;

    private function __construct(int $line, string $message, string $sourceClass)
    {
        $this->line = $line;
        $this->message = $message;
        $this->sourceClass = $sourceClass;
    }

    public static function createFromLineMessageSourceClass(int $line, string $message, string $sourceClass): self
    {
        return new self($line, $message, $sourceClass);
    }

    public function getLine(): int
    {
        return $this->line;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getSourceClass(): string
    {
        return $this->sourceClass;
    }
}
