![SmartLogin](http://www.smartlogin.com.ar/images/logo.png)

[www.smartlogin.com.ar](http://www.smartlogin.com.ar)
Documentación de acceso a la API de SmartLogin


----------

Introducción
----------------
SmartLogin dispone de una API ReST para la interacción con sistemas externos. 

----------

Seguridad
----------------
El acceso a la API se realiza a través de un endpoint encriptado para evitar la intercepción de datos durante la transmisión. Asimismo, para acceder a la API deberá identificarse con credenciales generadas desde el portal, evitando de esta manera el acceso no autorizado. Las credenciales de acceso están asociadas a un cliente, por lo que no podrá acceder a información de otros clientes.

----------

Credenciales
------------
La obtención de credenciales se realiza desde el [el portal de clientes](https://clientes.smartlogin.com.ar/). Una vez iniciada la sesión deberá acceder al menú API y generar una clave.
Para ver las credenciales (API Key y Token) asociadas a una clave, haga click en el ícono de la llave.

Las credenciales se deben enviar en el header del pedido:
```
X-KEY: MI_API_KEY
X-TOKEN: MI_API_TOKEN
```

----------

Servicios
---------
La URL base de la API se encuentra en

    https://clientes.smartlogin.com.ar/api


/nodes
/nodes?healthy
/nodes?unhealthy
/nodes/:gwid

| Endpoint             | Descripción              
 --------------------- | ------------------------------------------------
| `/nodes`             | Ver el estado de todos los nodos registrados
| `/nodes?healthy`     | Ver el estado de todos los nodos sanos
| `/nodes?unhealthy`   | Ver el estado de todos los nodos con problemas
| `/nodes/:gwid`       | Ver el estado del nodo cuyo ID es `:gwid`


#### /nodes
    https://clientes.smartlogin.com.ar/api/nodes

```
[
   {
      "id":"TESTNODE-001",
      "location":"Buenos Aires",
      "last_reported_ip":"x.x.x.x",
      "last_contact":"2017-06-16 15:23:26",
      "last_reported_uptime":28119,
      "last_reported_sys_load":0,
      "last_reported_mem_free":95588,
      "healty":true,
      "alert_last_contact":false,
      "alert_last_reported_uptime":false,
      "alert_last_reported_sys_load":false,
      "alert_last_reported_mem_free":false
   },
   {
      "id":"TESTNODE-002",
      "location":"Rosario",
      "last_reported_ip":"x.x.x.x",
      "last_contact":"2017-03-24 15:27:34",
      "last_reported_uptime":757739,
      "last_reported_sys_load":0,
      "last_reported_mem_free":6164,
      "healty":false,
      "alert_last_contact":true,
      "alert_last_reported_uptime":false,
      "alert_last_reported_sys_load":false,
      "alert_last_reported_mem_free":false
   }
]	
```

#### /nodes?healthy
    https://clientes.smartlogin.com.ar/api/nodes?healthy

```
[
   {
      "id":"TESTNODE-001",
      "location":"Buenos Aires",
      "last_reported_ip":"x.x.x.x",
      "last_contact":"2017-06-16 15:23:26",
      "last_reported_uptime":28119,
      "last_reported_sys_load":0,
      "last_reported_mem_free":95588,
      "healty":true,
      "alert_last_contact":false,
      "alert_last_reported_uptime":false,
      "alert_last_reported_sys_load":false,
      "alert_last_reported_mem_free":false
   }
]	
```

#### /nodes?unhealthy
    https://clientes.smartlogin.com.ar/api/nodes?unhealthy

```
[
   {
      "id":"TESTNODE-002",
      "location":"Rosario",
      "last_reported_ip":"x.x.x.x",
      "last_contact":"2017-03-24 15:27:34",
      "last_reported_uptime":757739,
      "last_reported_sys_load":0,
      "last_reported_mem_free":6164,
      "healty":false,
      "alert_last_contact":true,
      "alert_last_reported_uptime":false,
      "alert_last_reported_sys_load":false,
      "alert_last_reported_mem_free":false
   }
]	
```
#### /nodes/:gwid
    https://clientes.smartlogin.com.ar/api/nodes/TESTNODE-001

```
{
   "id":"TESTNODE-001",
   "location":"Buenos Aires",
   "last_reported_ip":"x.x.x.x",
   "last_contact":"2017-06-16 15:23:26",
   "last_reported_uptime":28119,
   "last_reported_sys_load":0,
   "last_reported_mem_free":95588,
   "healty":true,
   "alert_last_contact":false,
   "alert_last_reported_uptime":false,
   "alert_last_reported_sys_load":false,
   "alert_last_reported_mem_free":false
}
```
