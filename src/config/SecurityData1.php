<?php

namespace Bickyraj\Hbl\Config;

class SecurityData
{

    public static string $OfficeId = "9103331625";

    /**
     * JWE Key Id.
     *
     * @var string
     */
    public static string $EncryptionKeyId = "19f84b5655f04e25a99b09f1ee2fac78";

    /**
     * Access Token.
     *
     * @var string
     */
    public static string $AccessToken = "U4EIFLEZM7NQ7N1ZFXIEXGNJK15M0EGC";

    /**
     * Token Type - Used in JWS and JWE header.
     *
     * @var string
     */
    public static string $TokenType = "JWT";

    /**
     * JWS (JSON Web Signature) Signature Algorithm - This parameter identifies the cryptographic algorithm used to
     * secure the JWS.
     *
     * @var string
     */
    public static string $JWSAlgorithm = "PS256";

    /**
     * JWE (JSON Web Encryption) Key Encryption Algorithm - This parameter identifies the cryptographic algorithm
     * used to secure the JWE.
     *
     * @var string
     */
    public static string $JWEAlgorithm = "RSA-OAEP";

    /**
     * JWE (JSON Web Encryption) Content Encryption Algorithm - This parameter identifies the content encryption
     * algorithm used on the plaintext to produce the encrypted ciphertext.
     *
     * @var string
     */
    public static string $JWEEncrptionAlgorithm = "A128CBC-HS256";

    /**
     * Merchant Signing Private Key is used to cryptographically sign and create the request JWS.
     *
     * @var string
     */
    public static string $MerchantSigningPrivateKey = "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";
    /**
     * PACO Encryption Public Key is used to cryptographically encrypt and create the request JWE.
     *
     * @var string
     */
    public static string $PacoEncryptionPublicKey = "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEA6ZLups2K0iYEMxQqgASX8gY6tWhNVCp08YuDgjCsOVrGVgUHD0dh0TWFNJ7Lq2Jp0SOsGgi54+hrjwPOL2CCZxw8pKUlL57UksoD9oWUrK/KkSvEAwPU4cZqzxIXyhBcZb8O96iN4WQJILkRTg+DXLkML6qisO496fPGIs+vCoc87toucy5O9fRfaYSjcqjreyi8JDkvVJM/BeNtOEM2a0b/lcWa67RH+tN97H25k+Qez7QthLru6oBfWBgD6iIwhV+ICqLWHmp6fQ+DHQk/o+OO3yFiY9OAvMiy8MOTinvkBlFwYgYNznG3/w0Xh8U5vtudUXPDNUO6ddf4y99+6LlWDiKgJn/Th93YUg+gFH4LUJHyPrSY2JuC+Q8kksp2xyiZDTHGzi96kturwrqCui6TytCHcU4UB0VRMR+M7VRl3S2YPhcxv5U8Fh2PITqydZE5vv1Va06qhegjOlSZnEUl2xKPm5k/u+UHvUP/oq04fQLTlYqyA3JYDCe4z5Ea2SOgjeVl+qTatWYzmkUXyCONLZ4UaRrgbYCp0nCPHoTFgRQdChu8ezDbnYY9IW7cT/s2fEi5N7X1XrQttiEP4rbn0y0qVYYjN86+elfhtYGHidZTUSUS5RSTHqOkj59p5LIGwFF9iTXzCjfUqq8clnfOk76qSLY1+Kj+SMMe6Z8CAwEAAQ==";
    /**
     * PACO Signing Public Key is used to cryptographically verify the response JWS signature.
     *
     * @var string
     */
    public static string $PacoSigningPublicKey = "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAr0XW6QacR8GilY4nZrJZW40wnFeYu7h9aXUSqxCP6djurCWZmLqnrsYWP7/HR8WOulYPHTVpfqJesTOdVqPgY6p10H811oRbJG9jvsG8j8kn/Bk8b2wZ9qelNqdNJMDbR5WUyaytaDWW6QdI4+clqjFfwCOw76noDSe+R4pDSzgMiyCk5R4m2ECT1fv/4Axz2bvLN+DRTg5DPPIMLWpA87lgjxeaDlGyJqZCbkJozW7JX0AJVc0X7YR9kzbiTi3LVOInSKY+VHT8yCARIdvXtKc6+IWSbVQqgpNIBB8GN0OvU8xedjPNCMGZnnMtgd7XLTf/okyadbdNLAqQLTbDs/5HnIVx8FyfgiOS/zsim5ivi3ljVAW3T3ePGjkY0q1DMzr5iJ4m/WTL2d1TArlfHyQhkSpFpQPOO+pJyVQqttHJo99vMirQogdSx4lIu//aod0yJyJLpjCeiqb2Fz3Qk0AZ4S78QKeeGsxTRchTP6Wsb6okaZd+cFi6z8qbP0z/Y3xRZO7vOLB/whkqS+pMVKBQ42YzgQPRzbXXmgCkf1nCqgrD9bnIB5ovdRGfDXW86GKY8XwGVjb4BoMvql+HsbonKHAO+eGfQulpB5YfQGQU3ZXdMdfCLAk8FuqemH4k7S7diLzVvRCuisHsEx6qJ4ewxzNCvW7OGVinTR9NSQUCAwEAAQ==";
    /**
     * Merchant Decryption Private Key used to cryptographically decrypt the response JWE.
     * @var string
     */
    public static string $MerchantDecryptionPrivateKey = "MIIJQQIBADANBgkqhkiG9w0BAQEFAASCCSswggknAgEAAoICAQCkmvF/yXXGm0tiY6JZ58xd1T5nQlhR8g98qvmvsH39jCGKD6QuDXsHc8GGsi+3PU0Rhh9fHkfTHUMMb6ZrzmlhoOQBO5wmPKOdG1FQa9t/hJNa8BGb6Z0fiAyapcLPBUDSLcXvcI3mBnF+1mBCj5sLH4IQ1p5l7s9Jp+lu8kHowUBJvWwJtw++r2CH8hYmvS6pwPdG/yeleitHhw+HbTA8yVbVoXymK/LHuDQlH5J6cah96pY6BAe7/7pgrPfHVmRoXwgQPqo96tJzfssdCWgtuVxrnHcmnOEG0I0iGwhgqGc+wBnbmm++aQtocnT4SFNEtOd9fXRCtCjlOa9yTdoYHqV3XJAUUZp0aydxwe3ZJ+FE/jHDsFwHob48WImyX4ofI+w13U/Z8cIfQbKLHvx7WUl984+jJdwvSmwKjhhui3Kml7yHoMSbNjbn5iR0u9oMg8iQTTe8I8tLgBcuNqtc+ZyjN5z3d69dley5ki16MuCq4JECOix23el9EOnIzgob+1wXj/NJnFaBq9Cp0DS/gnUnRZuEEYTOWlua6KzdbElR3VyDg9CKhHAuZFWt0l8d2MGTXzqcQ9+f2M0A1eQbyCo6zAepNRe1DH6L4w4YjgZT7p2SYgihZadi2iScIXNPxe09Nu5v8MDG2wqenjay8ihczloNFQYhTmRKKhjvywIDAQABAoICABlP8l8yPbhC3T7OD4M/z/+F8UizvR0s2hDTwf2waE97IxU1/otOa2Lj/BiYghnthVJyi5R29ZiTYWIiMTdW0IHA2g8OeZ6vqIFaWBDD5UcgvgA39p1BOXZF15pYbzKinisz+sItTsTWrNFSag8SQkddmwS33DfUl2++MHltK5F9VkOAq4J68iLimTeOlLV0Vh6om94BErmxpcIkFNFAizBtzbqgUKjFDVqFCw/CYSYPIFfsoRle0Umps6F2N8whjuM16emFmWxYFfDIyLc4YRrW7E1oDDKV4UzI+UsLWShz/Rx7Mf7BKvne8XAoWbBsftGL+CUmC6DOT5OgYUh0jFr1lw4Pk5KnCv0JfYM2QYec2FBgSySyki/8z9qj9GGxDy76UEVN+nNM0MvBBE7Ft7qmOjqJnMWiohC0YRtA+VfQSJYqcP2xzHIi/3B5bQ5P4WX6rxPEWpjIE0gcmZneSwP7eia8DMEUlkzW3Z4xkJpAT5q90+SJUjClP+HrW+IKvZbcRzShI+ZB8QaGkiOiKFpjX0aUJTKP/FCKMwNUzOcll3qIRkjDKGBN4lp1LgDdFPmLNfUAPER23R+h5tLJR2Ql1nEEx/mRhnrsztLvPUtCQd+Aye4FPOu0DO6yKlSbBYx4bFOVgGuAMXHKYOV7VaEjo16oWaJ6JX/hi6muj3MBAoIBAQDnJ2Iob3XbS9e35Fo6y3UaVndxqyyy+23x8bJ/8hi1fjreJhen5iwWfi1jBMxpiFpEBUOX/EOK9bBIpdBKTwXdqR7ifmtJoamraUkj1+yixfgLYTWdDYqih3mYRM+T15+1oM1ygAqb4WSQ9WHRJW1SOleo2di5WiC/5Dxfr0Y5WJYIY0V8w7vLv9rtTHd2ffs53vvKe5SwI8mifUwurRne8ERKiIBHfg2ldikTQWG57+Lnb0+T7x8OHZntBUrdxU20UfjES6yazp02CA66vpdNayiJ8vx6NOi86fp8Dqyylgt+yqusXJLAMs8JtfwF77e37czoIx0A8r8cCFNcsCZBAoIBAQC2TFrW6XC5H4PYVbgS02T1NYXzd1/S/AuqNu91WLbW/EtDtcTWq4oB+bTB+RedXCP64IgXaiPS/swQnSL+oLHyg7bg54mmYwI4TwfZlDjsBdvFcjb80YMUIwv6K1Cq7umNzFQDG0VTG4OIFDkj4BKLWpnMZuIK1j/HIfpZMNJgrgcleByYYTRafO7LTVLOdhRocvbP6/7lckdCEN6Bf9dnYa++za/Hftpk4OpADF7qgxQft8PqjslJBeJiFyZ/M/QzLPoPomxvM+WCY5ixBIGEjYJnOI+6iXkhOuy78eVW7o2Jnet337h+aaTPE+or4nrDb8wB2Cr3K0K5AC5tQosLAoIBAAffV4B5C1KEqrwgktIdy8cx2q+MXOFbnsr2qFWjMSQ9QFQAiB23wRijA3iz2SJe+nQGmd67QLGi3HYc75MYTeLWt66PD6haUST9WPhXij+g7mm0zdajd21Bn+qHrWojldThvR2BLttQOdSWBtbQp4B9bC7b/H2TjDn80/GOTp31Xma6ussc/3BZAGPEju0CLWQzK/AhdVbqYRufmNCeJJtrI2hGbdgBewV/mLaHK4ThnqCzMcqgAjbA21UvMPWMmrDhec91pFNBZilI7Pd/Njf0xlSsadzfoG2OqnE/LrKGWa3fySj9niHdmR+DiynImEEzYB8n0v0NR2T1A6HMfgECggEAbPESdE6LU8ZWp2kKmQ2FzthOlaHoPRDs86rizXDXy4B4hh1RZayby/RrJmRyzVJsGhgmnD+M6yHj16XgbOShkzlNh/g2lZ2jjP0FxuxCXCJgJQ3NeKbIO7d6B+Xszkn6fwf1yOl6M2FE6ISVZTAaRPc+5B0zxqAk+x7+GmEHyEkX8jdmd1XX0J/KoOozqzh7l7PkdXsmF/6EQSINprw8gQaq3U7UVlcjspeKxf3ely0AULgkN79e4OnIUTBejDQDIrYlNkStooMUDCjy7g6wTAO5Q3BUzHgtUEODiAnWMW5cXTpnpnqnKbx+hlXzYoh1LuhXtV52xsEunZpTJG5Y4wKCAQBMpwbJ4ytIpdzRcMNl5aFiyT4SxDOF4/PaYbjFUS/WwsQsHavCIaySN7YXnay2JLa5fwtBumgpjhpBBLvR7XE1PykdV/3fgEqD4qviwe5L7nLpUkd2x241gc/js2ygncvaSnAarV7L+5Nn6EXylvTZvdk+48q1GaUZ6t5Fl48ADG1LorpWSf3xGjTbetamT1mOw8wHUrujKOnDOMzgBH/OWjLvnOrKbBQlXFfcbNzDvkv065PUMXsxrhqRnaL9UPBlMTp15a20hEtoMmeQ7FZ+R/z55mNu6SwBt0eTX+OlC2OrDo9ZWlTouN1syrTG5FY9wA2dtVWErQ985gVtCVig";
}
