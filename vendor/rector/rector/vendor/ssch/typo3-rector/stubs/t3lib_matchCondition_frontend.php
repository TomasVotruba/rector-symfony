<?php

namespace RectorPrefix20210710;

if (\class_exists('t3lib_matchCondition_frontend')) {
    return;
}
class t3lib_matchCondition_frontend
{
}
\class_alias('t3lib_matchCondition_frontend', 't3lib_matchCondition_frontend', \false);