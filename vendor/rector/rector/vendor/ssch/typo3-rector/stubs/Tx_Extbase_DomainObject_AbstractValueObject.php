<?php

namespace RectorPrefix20210710;

if (\class_exists('Tx_Extbase_DomainObject_AbstractValueObject')) {
    return;
}
class Tx_Extbase_DomainObject_AbstractValueObject
{
}
\class_alias('Tx_Extbase_DomainObject_AbstractValueObject', 'Tx_Extbase_DomainObject_AbstractValueObject', \false);