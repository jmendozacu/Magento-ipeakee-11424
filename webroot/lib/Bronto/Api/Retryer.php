<?php
/**
 * This file was generated by the ConvertToLegacy class in bronto-legacy.
 * The purpose of the conversion was to maintain PSR-0 compliance while
 * the main development focuses on modern styles found in PSR-4.
 *
 * For the original:
 * @see src/Bronto/Api/Retryer.php
 */

/**
 * Bronto_Api_Retryer interface that allows the Api client to save
 * a failed request or deserialize the same request
 *
 * @author Philip Cali <philip.cali@bronto.com>
 */
interface Bronto_Api_Retryer
{
    /**
     * Serialize a write request with an optional try count
     *
     * @param Bronto_Object $object
     * @param string $apiToken
     * @param int $attempts
     * @return boolean
     */
    public function store(Bronto_Object $object, $apiToken, $attempts = 0);

    /**
     * Deserialize an attempt with a provided identifier
     *
     * @param mixed $identifier
     * @return boolean
     */
    public function attempt($identifier);
}
