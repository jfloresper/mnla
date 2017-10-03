<?php

namespace TicketManagement\Model;

use DomainException;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Incident {

    public $IDX;
    public $STS_REC;
    public $ID;
    public $STATUS_IDX;
    public $USER_IDX;
    public $CPE_IDX;
    public $SYMPTOM_IDX;
    public $AREA_IDX;
    public $TYPE_MEDIA_IDX;
    public $TYPE_IDX;
    public $REASON_IDX;
    public $DESCRIPTION;
    public $PRIORITY;
    public $MODIFICATIONDATE;
    public $CLOSINGDATE;
    public $DCREATE;
    public $DMODIFY;
    public $DDELETE;
    public $REGISTRATIONDATE;
    public $INCIDENTDATE;
    public $TYPE_IMPACT_IDX;
    public $TYPE_URGENCY_IDX;
    public $TYPE_LEVEL_IDX;
    public $TYPE_CONTACT_IDX;
    public $TYPE_PRODUCT_IDX;
    public $CONTACT;
    public $DERIVATIONDESCRIPTION;
    public $CLOSEDESCRIPTION;
    public $VNO_IDX;
    public $CAUSE_INCIDENT;
    public $TYPE_SOLUTION_IDX;
    public $CLOSE_ATTACHED_FILE;
    public $RETURN_DESCRIPTION;
    public $RETURN_DATE;
    public $DERIVATION_L3_DESCRIPTION;
    public $DERIVATION_L3_DATE;
    public $CONTACT_INFORMATION;
    public $USER_ASSIGNED_IDX;
    public $TERMINAL_IDX;
    private $inputFilter;

    public function exchangeArray(array $data) {
        $this->IDX = (!empty($data['IDX'])) ? $data['IDX'] : null;
        $this->STS_REC = (!empty($data['STS_REC'])) ? $data['STS_REC'] : null;
        $this->ID = (!empty($data['ID'])) ? $data['ID'] : null;
        $this->STATUS_IDX = (!empty($data['STATUS_IDX'])) ? $data['STATUS_IDX'] : null;
        $this->USER_IDX = (!empty($data['USER_IDX'])) ? $data['USER_IDX'] : null;
        $this->CPE_IDX = (!empty($data['CPE_IDX'])) ? $data['CPE_IDX'] : null;
        $this->SYMPTOM_IDX = (!empty($data['SYMPTOM_IDX'])) ? $data['SYMPTOM_IDX'] : null;
        $this->AREA_IDX = (!empty($data['AREA_IDX'])) ? $data['AREA_IDX'] : null;
        $this->TYPE_MEDIA_IDX = (!empty($data['TYPE_MEDIA_IDX'])) ? $data['TYPE_MEDIA_IDX'] : null;
        $this->TYPE_IDX = (!empty($data['TYPE_IDX'])) ? $data['TYPE_IDX'] : null;
        $this->REASON_IDX = (!empty($data['REASON_IDX'])) ? $data['REASON_IDX'] : null;
        $this->DESCRIPTION = (!empty($data['DESCRIPTION'])) ? $data['DESCRIPTION'] : null;
        $this->PRIORITY = (!empty($data['PRIORITY'])) ? $data['PRIORITY'] : null;
        $this->MODIFICATIONDATE = (!empty($data['MODIFICATIONDATE'])) ? $data['MODIFICATIONDATE'] : null;
        $this->CLOSINGDATE = (!empty($data['CLOSINGDATE'])) ? $data['CLOSINGDATE'] : null;
        $this->DCREATE = (!empty($data['DCREATE'])) ? $data['DCREATE'] : null;
        $this->DMODIFY = (!empty($data['DMODIFY'])) ? $data['DMODIFY'] : null;
        $this->DDELETE = (!empty($data['DDELETE'])) ? $data['DDELETE'] : null;
        $this->REGISTRATIONDATE = (!empty($data['REGISTRATIONDATE'])) ? $data['REGISTRATIONDATE'] : null;
        $this->INCIDENTDATE = (!empty($data['INCIDENTDATE'])) ? $data['INCIDENTDATE'] : null;
        $this->TYPE_IMPACT_IDX = (!empty($data['TYPE_IMPACT_IDX'])) ? $data['TYPE_IMPACT_IDX'] : null;
        $this->TYPE_URGENCY_IDX = (!empty($data['TYPE_URGENCY_IDX'])) ? $data['TYPE_URGENCY_IDX'] : null;
        $this->TYPE_LEVEL_IDX = (!empty($data['TYPE_LEVEL_IDX'])) ? $data['TYPE_LEVEL_IDX'] : null;
        $this->TYPE_CONTACT_IDX = (!empty($data['TYPE_CONTACT_IDX'])) ? $data['TYPE_CONTACT_IDX'] : null;
        $this->TYPE_PRODUCT_IDX = (!empty($data['TYPE_PRODUCT_IDX'])) ? $data['TYPE_PRODUCT_IDX'] : null;
        $this->CONTACT = (!empty($data['CONTACT'])) ? $data['CONTACT'] : null;
        $this->DERIVATIONDESCRIPTION = (!empty($data['DERIVATIONDESCRIPTION'])) ? $data['DERIVATIONDESCRIPTION'] : null;
        $this->CLOSEDESCRIPTION = (!empty($data['CLOSEDESCRIPTION'])) ? $data['CLOSEDESCRIPTION'] : null;
        $this->VNO_IDX = (!empty($data['VNO_IDX'])) ? $data['VNO_IDX'] : null;
        $this->CAUSE_INCIDENT = (!empty($data['CAUSE_INCIDENT'])) ? $data['CAUSE_INCIDENT'] : null;
        $this->TYPE_SOLUTION_IDX = (!empty($data['TYPE_SOLUTION_IDX'])) ? $data['TYPE_SOLUTION_IDX'] : null;
        $this->CLOSE_ATTACHED_FILE = (!empty($data['CLOSE_ATTACHED_FILE'])) ? $data['CLOSE_ATTACHED_FILE'] : null;
        $this->RETURN_DESCRIPTION = (!empty($data['RETURN_DESCRIPTION'])) ? $data['RETURN_DESCRIPTION'] : null;
        $this->RETURN_DATE = (!empty($data['RETURN_DATE'])) ? $data['RETURN_DATE'] : null;
        $this->DERIVATION_L3_DESCRIPTION = (!empty($data['DERIVATION_L3_DESCRIPTION'])) ? $data['DERIVATION_L3_DESCRIPTION'] : null;
        $this->DERIVATION_L3_DATE = (!empty($data['DERIVATION_L3_DATE'])) ? $data['DERIVATION_L3_DATE'] : null;
        $this->CONTACT_INFORMATION = (!empty($data['CONTACT_INFORMATION'])) ? $data['CONTACT_INFORMATION'] : null;
        $this->USER_ASSIGNED_IDX = (!empty($data['USER_ASSIGNED_IDX'])) ? $data['USER_ASSIGNED_IDX'] : null;
        $this->TERMINAL_IDX = (!empty($data['TERMINAL_IDX'])) ? $data['TERMINAL_IDX'] : null;
    }

    public function getArrayCopy() {
        return [
            'IDX' => $this->IDX,
            'STS_REC' => $this->STS_REC,
            'ID' => $this->ID,
            'STATUS_IDX' => $this->STATUS_IDX,
            'USER_IDX' => $this->USER_IDX,
            'CPE_IDX' => $this->CPE_IDX,
            'SYMPTOM_IDX' => $this->SYMPTOM_IDX,
            'AREA_IDX' => $this->AREA_IDX,
            'TYPE_MEDIA_IDX' => $this->TYPE_MEDIA_IDX,
            'TYPE_IDX' => $this->TYPE_IDX,
            'REASON_IDX' => $this->REASON_IDX,
            'DESCRIPTION' => $this->DESCRIPTION,
            'PRIORITY' => $this->PRIORITY,
            'MODIFICATIONDATE' => $this->MODIFICATIONDATE,
            'CLOSINGDATE' => $this->CLOSINGDATE,
            'DCREATE' => $this->DCREATE,
            'DMODIFY' => $this->DMODIFY,
            'DDELETE' => $this->DDELETE,
            'REGISTRATIONDATE' => $this->REGISTRATIONDATE,
            'INCIDENTDATE' => $this->INCIDENTDATE,
            'TYPE_IMPACT_IDX' => $this->TYPE_IMPACT_IDX,
            'TYPE_URGENCY_IDX' => $this->TYPE_URGENCY_IDX,
            'TYPE_LEVEL_IDX' => $this->TYPE_LEVEL_IDX,
            'TYPE_CONTACT_IDX' => $this->TYPE_CONTACT_IDX,
            'TYPE_PRODUCT_IDX' => $this->TYPE_PRODUCT_IDX,
            'CONTACT' => $this->CONTACT,
            'DERIVATIONDESCRIPTION' => $this->DERIVATIONDESCRIPTION,
            'CLOSEDESCRIPTION' => $this->CLOSEDESCRIPTION,
            'VNO_IDX' => $this->VNO_IDX,
            'CAUSE_INCIDENT' => $this->CAUSE_INCIDENT,
            'TYPE_SOLUTION_IDX' => $this->TYPE_SOLUTION_IDX,
            'CLOSE_ATTACHED_FILE' => $this->CLOSE_ATTACHED_FILE,
            'RETURN_DESCRIPTION' => $this->RETURN_DESCRIPTION,
            'RETURN_DATE' => $this->RETURN_DATE,
            'DERIVATION_L3_DESCRIPTION' => $this->DERIVATION_L3_DESCRIPTION,
            'DERIVATION_L3_DATE' => $this->DERIVATION_L3_DATE,
            'CONTACT_INFORMATION' => $this->CONTACT_INFORMATION,
            'USER_ASSIGNED_IDX' => $this->USER_ASSIGNED_IDX,
            'TERMINAL_IDX' => $this->TERMINAL_IDX
        ];
    }

    public function setInputFilter(InputFilterInterface $inputFilter) {
        throw new DomainException(sprintf(
                '%s does not allow injection of an alternate input filter', __CLASS__
        ));
    }

    public function getInputFilter() {
        if ($this->inputFilter) {
            return $this->inputFilter;
        }

        $inputFilter = new InputFilter();

//        $inputFilter->add([
//            'name' => 'id',
//            'required' => true,
//            'filters' => [
//                ['name' => 'int'],
//            ],
//        ]);

        $this->inputFilter = $inputFilter;
        return $this->inputFilter;
    }

}
