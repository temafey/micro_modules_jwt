<?php declare(strict_types = 1);

namespace MicroModule\JWT\Signer\Ecdsa;

use MicroModule\JWT\Signer\Ecdsa;

/**
 * Signer for ECDSA SHA-256
 */
final class Sha256 extends Ecdsa
{

    public function getAlgorithmId(): string
    {
        return 'ES256';
    }

    public function getAlgorithm(): string
    {
        return 'sha256';
    }

}
