<?php namespace HL7\FHIR\STU3\FHIRResource\FHIRAuditEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 21st, 2019
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011-2013, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;

/**
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 */
class FHIRAuditEventEntity extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Identifies a specific instance of the entity. The reference should always be version specific.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Identifies a specific instance of the entity. The reference should be version specific.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $reference = null;

    /**
     * The type of the object that was involved in this audit event.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * Code representing the role the entity played in the event being audited.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public $role = null;

    /**
     * Identifier for the data life-cycle stage for the entity.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public $lifecycle = null;

    /**
     * Security labels for the identified entity.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public $securityLabel = [];

    /**
     * A name of the entity in the audit event.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Text that describes the entity in more detail.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The query parameters for a query-type entities.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRBase64Binary
     */
    public $query = null;

    /**
     * Tagged value pairs for conveying additional information about the entity.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRAuditEvent\FHIRAuditEventDetail[]
     */
    public $detail = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'AuditEvent.Entity';

    /**
     * Identifies a specific instance of the entity. The reference should always be version specific.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Identifies a specific instance of the entity. The reference should always be version specific.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Identifies a specific instance of the entity. The reference should be version specific.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * Identifies a specific instance of the entity. The reference should be version specific.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $reference
     * @return $this
     */
    public function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

    /**
     * The type of the object that was involved in this audit event.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The type of the object that was involved in this audit event.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Code representing the role the entity played in the event being audited.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * Code representing the role the entity played in the event being audited.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $role
     * @return $this
     */
    public function setRole($role) {
        $this->role = $role;
        return $this;
    }

    /**
     * Identifier for the data life-cycle stage for the entity.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public function getLifecycle() {
        return $this->lifecycle;
    }

    /**
     * Identifier for the data life-cycle stage for the entity.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $lifecycle
     * @return $this
     */
    public function setLifecycle($lifecycle) {
        $this->lifecycle = $lifecycle;
        return $this;
    }

    /**
     * Security labels for the identified entity.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public function getSecurityLabel() {
        return $this->securityLabel;
    }

    /**
     * Security labels for the identified entity.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $securityLabel
     * @return $this
     */
    public function addSecurityLabel($securityLabel) {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * A name of the entity in the audit event.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getName() {
        return $this->name;
    }

    /**
     * A name of the entity in the audit event.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Text that describes the entity in more detail.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Text that describes the entity in more detail.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * The query parameters for a query-type entities.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRBase64Binary
     */
    public function getQuery() {
        return $this->query;
    }

    /**
     * The query parameters for a query-type entities.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBase64Binary $query
     * @return $this
     */
    public function setQuery($query) {
        $this->query = $query;
        return $this;
    }

    /**
     * Tagged value pairs for conveying additional information about the entity.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRAuditEvent\FHIRAuditEventDetail[]
     */
    public function getDetail() {
        return $this->detail;
    }

    /**
     * Tagged value pairs for conveying additional information about the entity.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRAuditEvent\FHIRAuditEventDetail $detail
     * @return $this
     */
    public function addDetail($detail) {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['reference'])) {
                $this->setReference($data['reference']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['role'])) {
                $this->setRole($data['role']);
            }
            if (isset($data['lifecycle'])) {
                $this->setLifecycle($data['lifecycle']);
            }
            if (isset($data['securityLabel'])) {
                if (is_array($data['securityLabel'])) {
                    foreach($data['securityLabel'] as $d) {
                        $this->addsecurityLabel($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"securityLabel" must be array of objects or null, '.gettype($data['securityLabel']).' seen.'); 
                }
            }
            if (isset($data['name'])) {
                $this->setName($data['name']);
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['query'])) {
                $this->setQuery($data['query']);
            }
            if (isset($data['detail'])) {
                if (is_array($data['detail'])) {
                    foreach($data['detail'] as $d) {
                        $this->adddetail($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"detail" must be array of objects or null, '.gettype($data['detail']).' seen.'); 
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->reference)) $json['reference'] = $this->reference;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->role)) $json['role'] = $this->role;
        if (isset($this->lifecycle)) $json['lifecycle'] = $this->lifecycle;
        if (0 < count($this->securityLabel)) {
            $json['securityLabel'] = [];
            foreach($this->securityLabel as $securityLabel) {
                if (null !== $securityLabel) $json['securityLabel'][] = $securityLabel;
            }
        }
        if (isset($this->name)) $json['name'] = $this->name;
        if (isset($this->description)) $json['description'] = $this->description;
        if (isset($this->query)) $json['query'] = $this->query;
        if (0 < count($this->detail)) {
            $json['detail'] = [];
            foreach($this->detail as $detail) {
                if (null !== $detail) $json['detail'][] = $detail;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AuditEventEntity xmlns="http://hl7.org/fhir"></AuditEventEntity>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->reference)) $this->reference->xmlSerialize(true, $sxe->addChild('reference'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->role)) $this->role->xmlSerialize(true, $sxe->addChild('role'));
        if (isset($this->lifecycle)) $this->lifecycle->xmlSerialize(true, $sxe->addChild('lifecycle'));
        if (0 < count($this->securityLabel)) {
            foreach($this->securityLabel as $securityLabel) {
                $securityLabel->xmlSerialize(true, $sxe->addChild('securityLabel'));
            }
        }
        if (isset($this->name)) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (isset($this->query)) $this->query->xmlSerialize(true, $sxe->addChild('query'));
        if (0 < count($this->detail)) {
            foreach($this->detail as $detail) {
                $detail->xmlSerialize(true, $sxe->addChild('detail'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}