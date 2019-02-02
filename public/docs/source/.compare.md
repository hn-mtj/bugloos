---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/authorize" 
```

```javascript
const url = new URL("http://localhost/oauth/authorize");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (500):

```json
{
    "message": "Key path \"file:\/\/\/secret-keys\/oauth\\oauth-private.key\" does not exist or is not readable",
    "exception": "LogicException",
    "file": "C:\\wamp64\\www\\bugloos\\vendor\\league\\oauth2-server\\src\\CryptKey.php",
    "line": 48,
    "trace": [
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\passport\\src\\PassportServiceProvider.php",
            "line": 242,
            "function": "__construct",
            "class": "League\\OAuth2\\Server\\CryptKey",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\passport\\src\\PassportServiceProvider.php",
            "line": 208,
            "function": "makeCryptKey",
            "class": "Laravel\\Passport\\PassportServiceProvider",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\passport\\src\\PassportServiceProvider.php",
            "line": 98,
            "function": "makeAuthorizationServer",
            "class": "Laravel\\Passport\\PassportServiceProvider",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 776,
            "function": "Laravel\\Passport\\{closure}",
            "class": "Laravel\\Passport\\PassportServiceProvider",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 658,
            "function": "build",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 609,
            "function": "resolve",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
            "line": 759,
            "function": "make",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 912,
            "function": "make",
            "class": "Illuminate\\Foundation\\Application",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 840,
            "function": "resolveClass",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 807,
            "function": "resolveDependencies",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 658,
            "function": "build",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 609,
            "function": "resolve",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
            "line": 759,
            "function": "make",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 233,
            "function": "make",
            "class": "Illuminate\\Foundation\\Application",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 833,
            "function": "getController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 794,
            "function": "controllerMiddleware",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "gatherMiddleware",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 675,
            "function": "gatherRouteMiddleware",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 659,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 614,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php",
            "line": 272,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php",
            "line": 256,
            "function": "callLaravelRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseStrategies\\ResponseCallStrategy.php",
            "line": 33,
            "function": "makeApiCall",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php",
            "line": 49,
            "function": "__invoke",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\ResponseResolver.php",
            "line": 68,
            "function": "resolve",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Tools\\Generator.php",
            "line": 54,
            "function": "getResponse",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "::"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php",
            "line": 196,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Commands\\GenerateDocumentation.php",
            "line": 57,
            "function": "processRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 572,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\symfony\\console\\Application.php",
            "line": 901,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\wamp64\\www\\bugloos\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST "http://localhost/oauth/authorize" 
```

```javascript
const url = new URL("http://localhost/oauth/authorize");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/authorize" 
```

```javascript
const url = new URL("http://localhost/oauth/authorize");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST "http://localhost/oauth/token" 
```

```javascript
const url = new URL("http://localhost/oauth/token");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/tokens" 
```

```javascript
const url = new URL("http://localhost/oauth/tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/tokens/{token_id}" 
```

```javascript
const url = new URL("http://localhost/oauth/tokens/{token_id}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST "http://localhost/oauth/token/refresh" 
```

```javascript
const url = new URL("http://localhost/oauth/token/refresh");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/clients" 
```

```javascript
const url = new URL("http://localhost/oauth/clients");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST "http://localhost/oauth/clients" 
```

```javascript
const url = new URL("http://localhost/oauth/clients");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT "http://localhost/oauth/clients/{client_id}" 
```

```javascript
const url = new URL("http://localhost/oauth/clients/{client_id}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/clients/{client_id}" 
```

```javascript
const url = new URL("http://localhost/oauth/clients/{client_id}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/scopes" 
```

```javascript
const url = new URL("http://localhost/oauth/scopes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("http://localhost/oauth/personal-access-tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST "http://localhost/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("http://localhost/oauth/personal-access-tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/personal-access-tokens/{token_id}" 
```

```javascript
const url = new URL("http://localhost/oauth/personal-access-tokens/{token_id}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_0bfd90e643e49117746d270f35d4851b -->
## Display a
listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/post" 
```

```javascript
const url = new URL("http://localhost/api/post");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": true,
    "resutlt": {
        "id": 2,
        "title": "sirrrr",
        "summery": null,
        "publish_time": "2019-02-01 13:20:40",
        "category": [
            {
                "id": 1,
                "name": "test 1"
            }
        ]
    }
}
```

### HTTP Request
`GET api/post`


<!-- END_0bfd90e643e49117746d270f35d4851b -->

<!-- START_e99a1b27320bf31b2f45a737a4cf3a39 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/post/show" 
```

```javascript
const url = new URL("http://localhost/api/post/show");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "status": false,
    "message": "not found"
}
```

### HTTP Request
`GET api/post/show`


<!-- END_e99a1b27320bf31b2f45a737a4cf3a39 -->

<!-- START_112f38c169c6b664068ce459c85b7d63 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/post" 
```

```javascript
const url = new URL("http://localhost/api/post");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/post`


<!-- END_112f38c169c6b664068ce459c85b7d63 -->

<!-- START_33229116efe579e33d06db6377ee0fa8 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PATCH "http://localhost/api/post/{id}" 
```

```javascript
const url = new URL("http://localhost/api/post/{id}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PATCH api/post/{id}`


<!-- END_33229116efe579e33d06db6377ee0fa8 -->

<!-- START_f4b4dd502854c17b7459bf3d4803f346 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET -G "http://localhost/api/post/delete" 
```

```javascript
const url = new URL("http://localhost/api/post/delete");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (403):

```json
{
    "status": false
}
```

### HTTP Request
`GET api/post/delete`


<!-- END_f4b4dd502854c17b7459bf3d4803f346 -->

<!-- START_db20564ba266cd451caac114b3eac8ab -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/category" 
```

```javascript
const url = new URL("http://localhost/api/category");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": true,
    "resutlt": [
        {
            "id": 1,
            "name": "test 1"
        },
        {
            "id": 3,
            "name": "sirrrr"
        }
    ]
}
```

### HTTP Request
`GET api/category`


<!-- END_db20564ba266cd451caac114b3eac8ab -->

<!-- START_16374ce60d465cead688f008bdd6919d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/category/show" 
```

```javascript
const url = new URL("http://localhost/api/category/show");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "status": false,
    "message": "not found"
}
```

### HTTP Request
`GET api/category/show`


<!-- END_16374ce60d465cead688f008bdd6919d -->

<!-- START_894ef06ce7a41cb47f9c434fcd778d9a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/category" 
```

```javascript
const url = new URL("http://localhost/api/category");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/category`


<!-- END_894ef06ce7a41cb47f9c434fcd778d9a -->

<!-- START_93c4876dba4384860cdb894f4fd1fa67 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PATCH "http://localhost/api/category/{id}" 
```

```javascript
const url = new URL("http://localhost/api/category/{id}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PATCH api/category/{id}`


<!-- END_93c4876dba4384860cdb894f4fd1fa67 -->

<!-- START_1b128cbc53f33d999f77d847f676a27e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X GET -G "http://localhost/api/category/delete" 
```

```javascript
const url = new URL("http://localhost/api/category/delete");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (403):

```json
{
    "status": false
}
```

### HTTP Request
`GET api/category/delete`


<!-- END_1b128cbc53f33d999f77d847f676a27e -->


