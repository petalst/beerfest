<?php
namespace Beerfest\Core;

class Crypt
{
    /**
     * Encrypt string
     *
     * @param string $strString String to encrypt
     *
     * @since 10. March 2014, v. 1.00
     * @return string Encrypted string
     */
    public static function encrypt($strString)
    {
        return md5($strString);
    }// encrypt


}// Crypt