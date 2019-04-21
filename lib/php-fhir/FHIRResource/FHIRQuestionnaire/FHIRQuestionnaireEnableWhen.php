<?php namespace HL7\FHIR\STU3\FHIRResource\FHIRQuestionnaire;

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
 * A structured set of questions intended to guide the collection of answers from end-users. Questionnaires provide detailed control over order, presentation, phraseology and grouping to allow coherent, consistent data collection.
 */
class FHIRQuestionnaireEnableWhen extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $question = null;

    /**
     * An indication that this item should be enabled only if the specified question is answered (hasAnswer=true) or not answered (hasAnswer=false).
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public $hasAnswer = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public $answerBoolean = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDecimal
     */
    public $answerDecimal = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRInteger
     */
    public $answerInteger = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDate
     */
    public $answerDate = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public $answerDateTime = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRTime
     */
    public $answerTime = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $answerString = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRUri
     */
    public $answerUri = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRAttachment
     */
    public $answerAttachment = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public $answerCoding = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRQuantity
     */
    public $answerQuantity = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $answerReference = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Questionnaire.EnableWhen';

    /**
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getQuestion() {
        return $this->question;
    }

    /**
     * The linkId for the question whose answer (or lack of answer) governs whether this item is enabled.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $question
     * @return $this
     */
    public function setQuestion($question) {
        $this->question = $question;
        return $this;
    }

    /**
     * An indication that this item should be enabled only if the specified question is answered (hasAnswer=true) or not answered (hasAnswer=false).
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getHasAnswer() {
        return $this->hasAnswer;
    }

    /**
     * An indication that this item should be enabled only if the specified question is answered (hasAnswer=true) or not answered (hasAnswer=false).
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBoolean $hasAnswer
     * @return $this
     */
    public function setHasAnswer($hasAnswer) {
        $this->hasAnswer = $hasAnswer;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getAnswerBoolean() {
        return $this->answerBoolean;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBoolean $answerBoolean
     * @return $this
     */
    public function setAnswerBoolean($answerBoolean) {
        $this->answerBoolean = $answerBoolean;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDecimal
     */
    public function getAnswerDecimal() {
        return $this->answerDecimal;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDecimal $answerDecimal
     * @return $this
     */
    public function setAnswerDecimal($answerDecimal) {
        $this->answerDecimal = $answerDecimal;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRInteger
     */
    public function getAnswerInteger() {
        return $this->answerInteger;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRInteger $answerInteger
     * @return $this
     */
    public function setAnswerInteger($answerInteger) {
        $this->answerInteger = $answerInteger;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDate
     */
    public function getAnswerDate() {
        return $this->answerDate;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDate $answerDate
     * @return $this
     */
    public function setAnswerDate($answerDate) {
        $this->answerDate = $answerDate;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getAnswerDateTime() {
        return $this->answerDateTime;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDateTime $answerDateTime
     * @return $this
     */
    public function setAnswerDateTime($answerDateTime) {
        $this->answerDateTime = $answerDateTime;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRTime
     */
    public function getAnswerTime() {
        return $this->answerTime;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRTime $answerTime
     * @return $this
     */
    public function setAnswerTime($answerTime) {
        $this->answerTime = $answerTime;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getAnswerString() {
        return $this->answerString;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $answerString
     * @return $this
     */
    public function setAnswerString($answerString) {
        $this->answerString = $answerString;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRUri
     */
    public function getAnswerUri() {
        return $this->answerUri;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRUri $answerUri
     * @return $this
     */
    public function setAnswerUri($answerUri) {
        $this->answerUri = $answerUri;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRAttachment
     */
    public function getAnswerAttachment() {
        return $this->answerAttachment;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAttachment $answerAttachment
     * @return $this
     */
    public function setAnswerAttachment($answerAttachment) {
        $this->answerAttachment = $answerAttachment;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding
     */
    public function getAnswerCoding() {
        return $this->answerCoding;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $answerCoding
     * @return $this
     */
    public function setAnswerCoding($answerCoding) {
        $this->answerCoding = $answerCoding;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRQuantity
     */
    public function getAnswerQuantity() {
        return $this->answerQuantity;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRQuantity $answerQuantity
     * @return $this
     */
    public function setAnswerQuantity($answerQuantity) {
        $this->answerQuantity = $answerQuantity;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getAnswerReference() {
        return $this->answerReference;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $answerReference
     * @return $this
     */
    public function setAnswerReference($answerReference) {
        $this->answerReference = $answerReference;
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
            if (isset($data['question'])) {
                $this->setQuestion($data['question']);
            }
            if (isset($data['hasAnswer'])) {
                $this->setHasAnswer($data['hasAnswer']);
            }
            if (isset($data['answerBoolean'])) {
                $this->setAnswerBoolean($data['answerBoolean']);
            }
            if (isset($data['answerDecimal'])) {
                $this->setAnswerDecimal($data['answerDecimal']);
            }
            if (isset($data['answerInteger'])) {
                $this->setAnswerInteger($data['answerInteger']);
            }
            if (isset($data['answerDate'])) {
                $this->setAnswerDate($data['answerDate']);
            }
            if (isset($data['answerDateTime'])) {
                $this->setAnswerDateTime($data['answerDateTime']);
            }
            if (isset($data['answerTime'])) {
                $this->setAnswerTime($data['answerTime']);
            }
            if (isset($data['answerString'])) {
                $this->setAnswerString($data['answerString']);
            }
            if (isset($data['answerUri'])) {
                $this->setAnswerUri($data['answerUri']);
            }
            if (isset($data['answerAttachment'])) {
                $this->setAnswerAttachment($data['answerAttachment']);
            }
            if (isset($data['answerCoding'])) {
                $this->setAnswerCoding($data['answerCoding']);
            }
            if (isset($data['answerQuantity'])) {
                $this->setAnswerQuantity($data['answerQuantity']);
            }
            if (isset($data['answerReference'])) {
                $this->setAnswerReference($data['answerReference']);
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
        if (isset($this->question)) $json['question'] = $this->question;
        if (isset($this->hasAnswer)) $json['hasAnswer'] = $this->hasAnswer;
        if (isset($this->answerBoolean)) $json['answerBoolean'] = $this->answerBoolean;
        if (isset($this->answerDecimal)) $json['answerDecimal'] = $this->answerDecimal;
        if (isset($this->answerInteger)) $json['answerInteger'] = $this->answerInteger;
        if (isset($this->answerDate)) $json['answerDate'] = $this->answerDate;
        if (isset($this->answerDateTime)) $json['answerDateTime'] = $this->answerDateTime;
        if (isset($this->answerTime)) $json['answerTime'] = $this->answerTime;
        if (isset($this->answerString)) $json['answerString'] = $this->answerString;
        if (isset($this->answerUri)) $json['answerUri'] = $this->answerUri;
        if (isset($this->answerAttachment)) $json['answerAttachment'] = $this->answerAttachment;
        if (isset($this->answerCoding)) $json['answerCoding'] = $this->answerCoding;
        if (isset($this->answerQuantity)) $json['answerQuantity'] = $this->answerQuantity;
        if (isset($this->answerReference)) $json['answerReference'] = $this->answerReference;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<QuestionnaireEnableWhen xmlns="http://hl7.org/fhir"></QuestionnaireEnableWhen>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->question)) $this->question->xmlSerialize(true, $sxe->addChild('question'));
        if (isset($this->hasAnswer)) $this->hasAnswer->xmlSerialize(true, $sxe->addChild('hasAnswer'));
        if (isset($this->answerBoolean)) $this->answerBoolean->xmlSerialize(true, $sxe->addChild('answerBoolean'));
        if (isset($this->answerDecimal)) $this->answerDecimal->xmlSerialize(true, $sxe->addChild('answerDecimal'));
        if (isset($this->answerInteger)) $this->answerInteger->xmlSerialize(true, $sxe->addChild('answerInteger'));
        if (isset($this->answerDate)) $this->answerDate->xmlSerialize(true, $sxe->addChild('answerDate'));
        if (isset($this->answerDateTime)) $this->answerDateTime->xmlSerialize(true, $sxe->addChild('answerDateTime'));
        if (isset($this->answerTime)) $this->answerTime->xmlSerialize(true, $sxe->addChild('answerTime'));
        if (isset($this->answerString)) $this->answerString->xmlSerialize(true, $sxe->addChild('answerString'));
        if (isset($this->answerUri)) $this->answerUri->xmlSerialize(true, $sxe->addChild('answerUri'));
        if (isset($this->answerAttachment)) $this->answerAttachment->xmlSerialize(true, $sxe->addChild('answerAttachment'));
        if (isset($this->answerCoding)) $this->answerCoding->xmlSerialize(true, $sxe->addChild('answerCoding'));
        if (isset($this->answerQuantity)) $this->answerQuantity->xmlSerialize(true, $sxe->addChild('answerQuantity'));
        if (isset($this->answerReference)) $this->answerReference->xmlSerialize(true, $sxe->addChild('answerReference'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}