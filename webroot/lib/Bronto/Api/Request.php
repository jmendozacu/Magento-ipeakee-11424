<?php
/**
 * This file was generated by the ConvertToLegacy class in bronto-legacy.
 * The purpose of the conversion was to maintain PSR-0 compliance while
 * the main development focuses on modern styles found in PSR-4.
 *
 * For the original:
 * @see src/Bronto/Api/Request.php
 */

/**
 * Represents an API read or write request
 *
 * @author Philip Cali <philip.cali@bronto.com>
 */
interface Bronto_Api_Request
{
    /**
     * SOAP function to be called in string format
     *
     * @return string
     */
    public function getMethod();

    /**
     * Whether or not this request is changing data on the server
     *
     * @return boolean
     */
    public function hasUpdates();

    /**
     * The SOAP parameters in the SOAP request
     *
     * @return array
     */
    public function getData();
}