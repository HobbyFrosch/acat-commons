<?php

namespace ACAT\Commons\Doctrine;

use Throwable;
use Doctrine\DBAL\Result;
use Doctrine\DBAL\Exception;
use Doctrine\DBAL\Connection;

/**
 *
 */
class ResilientConnection extends Connection
{

    /**
     * @throws Throwable
     * @throws Exception
     * @return Result
     *
     * @param           $qcp
     * @param   string  $sql
     * @param   array   $params
     * @param           $types
     */
    public function executeQuery(string $sql, array $params = [], $types = [], $qcp = null) : Result
    {
        try {
            return parent::executeQuery($sql, $params, $types, $qcp);
        } catch (Throwable $e) {
            if ($this->isConnectionLost($e)) {
                $this->close();
                $this->connect(); // neue Verbindung aufbauen
                return parent::executeQuery($sql, $params, $types, $qcp);
            }
            throw $e;
        }
    }

    /**
     * @return bool
     *
     * @param   Throwable  $e
     */
    private function isConnectionLost(Throwable $e): bool
    {
        $msg = $e->getMessage();
        return str_contains($msg, 'MySQL server has gone away')
            || str_contains($msg, 'Lost connection')
            || str_contains($msg, 'server has gone away');
    }
}