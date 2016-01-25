<?php namespace DCarbone\PHPFHIR\ClassGenerator;

/*
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

use DCarbone\AbstractCollectionPlus;

/**
 * Class XSDMap
 * @package PHPFHIR
 */
class XSDMap extends AbstractCollectionPlus
{
    /**
     * @param string $fhirElementName
     * @return string|null
     */
    public function getClassNameForFHIRElementName($fhirElementName)
    {
        if (isset($this[$fhirElementName]))
            return $this[$fhirElementName]['className'];

        return null;
    }

    /**
     * @param string $fhirElementName
     * @return null|string
     */
    public function getClassUseStatementForFHIRElementName($fhirElementName)
    {
        if (isset($this[$fhirElementName]))
            return sprintf('%s\\%s', $this[$fhirElementName]['rootNS'], $this[$fhirElementName]['className']);

        return null;
    }
}