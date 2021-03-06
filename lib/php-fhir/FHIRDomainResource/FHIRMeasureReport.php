<?php namespace HL7\FHIR\STU3\FHIRDomainResource;

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

use HL7\FHIR\STU3\FHIRResource\FHIRDomainResource;

/**
 * The MeasureReport resource contains the results of evaluating a measure.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMeasureReport extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * A formal identifier that is used to identify this report when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The report status. No data will be available until the report status is complete.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRMeasureReportStatus
     */
    public $status = null;

    /**
     * The type of measure report. This may be an individual report, which provides a single patient's score for the measure; a patient listing, which returns the list of patients that meet the various criteria in the measure; or a summary report, which returns a population count for each of the criteria in the measure.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRMeasureReportType
     */
    public $type = null;

    /**
     * A reference to the Measure that was evaluated to produce this report.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $measure = null;

    /**
     * Optional Patient if the report was requested for a single patient.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The date this measure report was generated.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Reporting Organization.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $reportingOrganization = null;

    /**
     * The reporting period for which the report was calculated.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The results of the calculation, one for each population group in the measure.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRMeasureReport\FHIRMeasureReportGroup[]
     */
    public $group = [];

    /**
     * A reference to a Bundle containing the Resources that were used in the evaluation of this report.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $evaluatedResources = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'MeasureReport';

    /**
     * A formal identifier that is used to identify this report when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * A formal identifier that is used to identify this report when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * The report status. No data will be available until the report status is complete.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRMeasureReportStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The report status. No data will be available until the report status is complete.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRMeasureReportStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * The type of measure report. This may be an individual report, which provides a single patient's score for the measure; a patient listing, which returns the list of patients that meet the various criteria in the measure; or a summary report, which returns a population count for each of the criteria in the measure.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRMeasureReportType
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The type of measure report. This may be an individual report, which provides a single patient's score for the measure; a patient listing, which returns the list of patients that meet the various criteria in the measure; or a summary report, which returns a population count for each of the criteria in the measure.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRMeasureReportType $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * A reference to the Measure that was evaluated to produce this report.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getMeasure() {
        return $this->measure;
    }

    /**
     * A reference to the Measure that was evaluated to produce this report.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $measure
     * @return $this
     */
    public function setMeasure($measure) {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Optional Patient if the report was requested for a single patient.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getPatient() {
        return $this->patient;
    }

    /**
     * Optional Patient if the report was requested for a single patient.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $patient
     * @return $this
     */
    public function setPatient($patient) {
        $this->patient = $patient;
        return $this;
    }

    /**
     * The date this measure report was generated.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * The date this measure report was generated.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDateTime $date
     * @return $this
     */
    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    /**
     * Reporting Organization.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getReportingOrganization() {
        return $this->reportingOrganization;
    }

    /**
     * Reporting Organization.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $reportingOrganization
     * @return $this
     */
    public function setReportingOrganization($reportingOrganization) {
        $this->reportingOrganization = $reportingOrganization;
        return $this;
    }

    /**
     * The reporting period for which the report was calculated.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * The reporting period for which the report was calculated.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * The results of the calculation, one for each population group in the measure.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRMeasureReport\FHIRMeasureReportGroup[]
     */
    public function getGroup() {
        return $this->group;
    }

    /**
     * The results of the calculation, one for each population group in the measure.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRMeasureReport\FHIRMeasureReportGroup $group
     * @return $this
     */
    public function addGroup($group) {
        $this->group[] = $group;
        return $this;
    }

    /**
     * A reference to a Bundle containing the Resources that were used in the evaluation of this report.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getEvaluatedResources() {
        return $this->evaluatedResources;
    }

    /**
     * A reference to a Bundle containing the Resources that were used in the evaluation of this report.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $evaluatedResources
     * @return $this
     */
    public function setEvaluatedResources($evaluatedResources) {
        $this->evaluatedResources = $evaluatedResources;
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
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['measure'])) {
                $this->setMeasure($data['measure']);
            }
            if (isset($data['patient'])) {
                $this->setPatient($data['patient']);
            }
            if (isset($data['date'])) {
                $this->setDate($data['date']);
            }
            if (isset($data['reportingOrganization'])) {
                $this->setReportingOrganization($data['reportingOrganization']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['group'])) {
                if (is_array($data['group'])) {
                    foreach($data['group'] as $d) {
                        $this->addgroup($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"group" must be array of objects or null, '.gettype($data['group']).' seen.'); 
                }
            }
            if (isset($data['evaluatedResources'])) {
                $this->setEvaluatedResources($data['evaluatedResources']);
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
        $json['resourceType'] = $this->_fhirElementName;
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->measure)) $json['measure'] = $this->measure;
        if (isset($this->patient)) $json['patient'] = $this->patient;
        if (isset($this->date)) $json['date'] = $this->date;
        if (isset($this->reportingOrganization)) $json['reportingOrganization'] = $this->reportingOrganization;
        if (isset($this->period)) $json['period'] = $this->period;
        if (0 < count($this->group)) {
            $json['group'] = [];
            foreach($this->group as $group) {
                if (null !== $group) $json['group'][] = $group;
            }
        }
        if (isset($this->evaluatedResources)) $json['evaluatedResources'] = $this->evaluatedResources;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MeasureReport xmlns="http://hl7.org/fhir"></MeasureReport>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->measure)) $this->measure->xmlSerialize(true, $sxe->addChild('measure'));
        if (isset($this->patient)) $this->patient->xmlSerialize(true, $sxe->addChild('patient'));
        if (isset($this->date)) $this->date->xmlSerialize(true, $sxe->addChild('date'));
        if (isset($this->reportingOrganization)) $this->reportingOrganization->xmlSerialize(true, $sxe->addChild('reportingOrganization'));
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (0 < count($this->group)) {
            foreach($this->group as $group) {
                $group->xmlSerialize(true, $sxe->addChild('group'));
            }
        }
        if (isset($this->evaluatedResources)) $this->evaluatedResources->xmlSerialize(true, $sxe->addChild('evaluatedResources'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}