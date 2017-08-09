<?php

namespace ircsasw\cfdi;

use Yii;
use yii\base\Object;
use yii\helpers\Url;
use kairos\phpqrcode\qrencode;

/**
 * Componente CfdiComponent.
 * Clase que genera un comprobante cfdi para timbrar ante un PAC.
 *
 * Esta clase se realiza con base a la librería CFDI.prg que se hizo por la comunidad de Visual FoxPro Factura Electrónica México
 * https://groups.google.com/forum/#!forum/vfp-factura-electronica-mexico
 *
 * Notas:
 * - Para ejecutar los comandos openssl tipo cmd se hacen individuales para mantener compatibilidad con sistemas operativos
 *   linux, unix, etc.
 * - La librería hasta este momento puede generar documentos cfdi de tipo FACTURA, HONORARIOS, ARRENDAMIENTO (Se pretende agregar
 *   los complementos restantes).
 *
 * @author Arturo Ramos <ircsasw@gmail.com>
 * @since 0.1
 */
class CfdiComponent extends Object
{

    public function method1($param1){
        return "Hello World";
    }
}
