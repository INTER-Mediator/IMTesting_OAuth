<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */
$metadata['https://idp.inter-mediator.com/'] = [
    'metadata-set' => 'saml20-idp-hosted',
    'entityid' => 'https://idp.inter-mediator.com/',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp.inter-mediator.com/simplesaml/module.php/saml/idp/singleSignOnService',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp.inter-mediator.com/simplesaml/module.php/saml/idp/singleLogout',
        ],
    ],
    'NameIDFormat' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'contacts' => [
        [
            'emailAddress' => 'nii@msyk.net',
            'givenName' => 'Administrator',
            'contactType' => 'technical',
        ],
    ],
    'certData' => 'MIIFHzCCA4egAwIBAgIUPYixVwPcFYiT3fKSTDLBA8/byLkwDQYJKoZIhvcNAQELBQAwgZ4xCzAJBgNVBAYTAkpQMRAwDgYDVQQIDAdTYWl0YW1hMRIwEAYDVQQHDAlNaWRvcmkta3UxFzAVBgNVBAoMDklOVEVSLU1lZGlhdG9yMRIwEAYDVQQLDAlDb21taXR0ZWUxHzAdBgNVBAMMFmlkcC5pbnRlci1tZWRpYXRvci5jb20xGzAZBgkqhkiG9w0BCQEWDG5paUBtc3lrLm5ldDAeFw0yNDA1MDIwOTM0NDZaFw0zNDA1MDIwOTM0NDZaMIGeMQswCQYDVQQGEwJKUDEQMA4GA1UECAwHU2FpdGFtYTESMBAGA1UEBwwJTWlkb3JpLWt1MRcwFQYDVQQKDA5JTlRFUi1NZWRpYXRvcjESMBAGA1UECwwJQ29tbWl0dGVlMR8wHQYDVQQDDBZpZHAuaW50ZXItbWVkaWF0b3IuY29tMRswGQYJKoZIhvcNAQkBFgxuaWlAbXN5ay5uZXQwggGiMA0GCSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQCXodIN/Ll+zBfmjvWdY+Om8dJRQeczNbZLgFRIu8OSYc4BpCscZ8G1uoyj1lA5RJsaCFUYrrHu3bvAw/L7j2mqYa6pCYeiJWEN+I/rO6rZdOeGGiwfpSXqG4cIknnVaqXcXqStCjrHcVKxcJSSBQI9N9kKmUxCX2aWKsu7yJl0NbaStvnzXdId6uo3+IYsm8gNPOr+mgTDlTIi4NbDhFhkZAY258PtBAyfyp+2Ey7IIsspZpm6k4bseJHNO2nlW+0zMnlwfdJVWWN9+lhgrIg7ZZ76s1hVysLqcSz5OwG/j4EOwRgzTcUw6zr3/FH82gzVNIcEr+wn6BMwSAogmpKO3y3yStIDDR4Vqrmv1pZJmgsZIa/peEc07CcgB78QhU+a6r20TsIc1haEat3YU3dQZXBQQd4T13pRdXKc0aQG//iVwT/v03eP3EvbWAu9RspyMN0nCPcY7Zr9KTiFOk/SWYWdkE+BsjFRUe2Nvi0spqJbpdDcV57IUgukbwP/LAECAwEAAaNTMFEwHQYDVR0OBBYEFH9pu3f95aSFH9zYbzvb0QhWF+m2MB8GA1UdIwQYMBaAFH9pu3f95aSFH9zYbzvb0QhWF+m2MA8GA1UdEwEB/wQFMAMBAf8wDQYJKoZIhvcNAQELBQADggGBAEY0MicTrCugGMeWWDj0G24rZham0iYNP+xr94g1mCbgQ8cRFotqhQeZZoshaIbzF25m1ahMwyOqSMa4qFIrGTcjnWvRqTIRfrJnFwy9FJZg/3KajuSLgKWJEIlW/AW6jIc0i+DK7NX+awVywhUKovhW37C4sUq3J+8yv/56mVTfb/k7LnRxv/icoTZN8mdLVOfEqALXFt84j+MG7mzvKB2DI9EfSPug5psB5bDhHLmPBSCEOsU3mvIwiRY19i/msNhx8G2DrHueIhrEDEyI0ljl1/awTpu37c+xVY0TWPTBt3H4qXavKnBAfgsEewaV88jPq2qjXARaneyqBUlF79Gy4C0XoMcnKdga69msT1I6KwtjS9a4ZLZZwnyO/KzIBm3aKvvp+yxeHa2gJm7m9Ba9PQb39bPu585jkIBU3kHSrXVZuD+l5rUqs0/Vk9BWypsFfHy1e8mi6oW15i6iu9AIkDVFRFuNTzdTGlvOSVNPSr6EFAhP0PP+kDfdxPhY/Q==',
];
