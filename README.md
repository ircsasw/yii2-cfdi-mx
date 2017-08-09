Componente CFDI para Yii2
=========================

Clase que genera un comprobante cfdi para timbrar ante un PAC.

Esta clase se realiza con base a la librería CFDI.prg que se hizo por la comunidad de Visual FoxPro - [Factura Electrónica México](https://groups.google.com/forum/#!forum/vfp-factura-electronica-mexico)

Para ejecutar los comandos openssl tipo cmd se hacen individuales para mantener compatibilidad con sistemas operativos linux, unix, etc.

La librería hasta este momento puede generar documentos cfdi de tipo FACTURA, HONORARIOS, ARRENDAMIENTO (Se pretende agregar los complementos restantes).

Requirements
------------
- PHP >= 5.4
- Extensión php_soap.dll
- Extensión php_xsl.dll
- Habilitar funciones de: system
- Habilitar funciones de: shell_exec

Installation
------------
`composer require `

Habilitar...

Usage
-----
Configurar...

Licence
-------
Licencia de IRCSA Software

Credits
-------
@Nombre

