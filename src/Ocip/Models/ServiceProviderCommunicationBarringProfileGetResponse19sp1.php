<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringProfileGetResponse19sp1
 *
 * Response to the ServiceProviderCommunicationBarringProfileGetRequest19sp1.
 *         The response contains the Communication Barring Profile information.
 *         The incoming, originating, redirecting and call me now rules are
 * returned in ascending priority order.
 *         The following elements are only used in AS data mode:
 *            callMeNowDefaultAction
 *            applyToAttendedCallTransfers
 *         The following elements are only used in AS data mode and not returned in
 * XS data mode
 *            callMeNowDefaultCallTimeout
 *            callMeNowRule
 *            
 *         Replaced By :
 * ServiceProviderCommunicationBarringProfileGetResponse19sp1V2 in AS data mode
 */
class ServiceProviderCommunicationBarringProfileGetResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName originatingDefaultAction
     * @var string|null
     */
    private $originatingDefaultAction = null;

    /**
     * @ElementName originatingDefaultTreatmentId
     * @var string|null
     */
    private $originatingDefaultTreatmentId = null;

    /**
     * @ElementName originatingDefaultTransferNumber
     * @var string|null
     */
    private $originatingDefaultTransferNumber = null;

    /**
     * @ElementName originatingDefaultCallTimeout
     * @var int|null
     */
    private $originatingDefaultCallTimeout = null;

    /**
     * @ElementName originatingRule
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalOriginatingRule[]
     */
    private $originatingRule = array(
        
    );

    /**
     * @ElementName redirectingDefaultAction
     * @var string|null
     */
    private $redirectingDefaultAction = null;

    /**
     * @ElementName redirectingDefaultCallTimeout
     * @var int|null
     */
    private $redirectingDefaultCallTimeout = null;

    /**
     * @ElementName redirectingRule
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalRedirectingRule[]
     */
    private $redirectingRule = array(
        
    );

    /**
     * @ElementName callMeNowDefaultAction
     * @var string|null
     */
    private $callMeNowDefaultAction = null;

    /**
     * @ElementName callMeNowDefaultCallTimeout
     * @var int|null
     */
    private $callMeNowDefaultCallTimeout = null;

    /**
     * @ElementName callMeNowRule
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule[]
     */
    private $callMeNowRule = array(
        
    );

    /**
     * @ElementName incomingDefaultAction
     * @var string|null
     */
    private $incomingDefaultAction = null;

    /**
     * @ElementName incomingDefaultCallTimeout
     * @var int|null
     */
    private $incomingDefaultCallTimeout = null;

    /**
     * @ElementName incomingRule
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule[]
     */
    private $incomingRule = array(
        
    );

    /**
     * @ElementName isDefault
     * @var bool|null
     */
    private $isDefault = null;

    /**
     * @ElementName applyToAttendedCallTransfers
     * @var bool|null
     */
    private $applyToAttendedCallTransfers = null;

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for originatingDefaultAction
     *
     * @ElementName originatingDefaultAction
     * @return string|null
     */
    public function getOriginatingDefaultAction()
    {
        return $this->originatingDefaultAction;
    }

    /**
     * Setter for originatingDefaultAction
     *
     * @ElementName originatingDefaultAction
     * @param string|null $originatingDefaultAction
     * @return $this
     */
    public function setOriginatingDefaultAction($originatingDefaultAction)
    {
        $this->originatingDefaultAction = $originatingDefaultAction;
        return $this;
    }

    /**
     * Getter for originatingDefaultTreatmentId
     *
     * @ElementName originatingDefaultTreatmentId
     * @return string|null
     */
    public function getOriginatingDefaultTreatmentId()
    {
        return $this->originatingDefaultTreatmentId;
    }

    /**
     * Setter for originatingDefaultTreatmentId
     *
     * @ElementName originatingDefaultTreatmentId
     * @param string|null $originatingDefaultTreatmentId
     * @return $this
     */
    public function setOriginatingDefaultTreatmentId($originatingDefaultTreatmentId)
    {
        $this->originatingDefaultTreatmentId = $originatingDefaultTreatmentId;
        return $this;
    }

    /**
     * Getter for originatingDefaultTransferNumber
     *
     * @ElementName originatingDefaultTransferNumber
     * @return string|null
     */
    public function getOriginatingDefaultTransferNumber()
    {
        return $this->originatingDefaultTransferNumber;
    }

    /**
     * Setter for originatingDefaultTransferNumber
     *
     * @ElementName originatingDefaultTransferNumber
     * @param string|null $originatingDefaultTransferNumber
     * @return $this
     */
    public function setOriginatingDefaultTransferNumber($originatingDefaultTransferNumber)
    {
        $this->originatingDefaultTransferNumber = $originatingDefaultTransferNumber;
        return $this;
    }

    /**
     * Getter for originatingDefaultCallTimeout
     *
     * @ElementName originatingDefaultCallTimeout
     * @return int|null
     */
    public function getOriginatingDefaultCallTimeout()
    {
        return $this->originatingDefaultCallTimeout;
    }

    /**
     * Setter for originatingDefaultCallTimeout
     *
     * @ElementName originatingDefaultCallTimeout
     * @param int|null $originatingDefaultCallTimeout
     * @return $this
     */
    public function setOriginatingDefaultCallTimeout($originatingDefaultCallTimeout)
    {
        $this->originatingDefaultCallTimeout = $originatingDefaultCallTimeout;
        return $this;
    }

    /**
     * Getter for originatingRule
     *
     * @ElementName originatingRule
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalOriginatingRule[]
     */
    public function getOriginatingRule()
    {
        return $this->originatingRule;
    }

    /**
     * Setter for originatingRule
     *
     * @ElementName originatingRule
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalOriginatingRule[] $originatingRule
     * @return $this
     */
    public function setOriginatingRule($originatingRule)
    {
        $this->originatingRule = $originatingRule;
        return $this;
    }

    /**
     * Adder for originatingRule
     *
     * @ElementName originatingRule
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalOriginatingRule $originatingRule
     * @return $this
     */
    public function addOriginatingRule($originatingRule)
    {
        $this->originatingRule []= $originatingRule;
        return $this;
    }

    /**
     * Getter for redirectingDefaultAction
     *
     * @ElementName redirectingDefaultAction
     * @return string|null
     */
    public function getRedirectingDefaultAction()
    {
        return $this->redirectingDefaultAction;
    }

    /**
     * Setter for redirectingDefaultAction
     *
     * @ElementName redirectingDefaultAction
     * @param string|null $redirectingDefaultAction
     * @return $this
     */
    public function setRedirectingDefaultAction($redirectingDefaultAction)
    {
        $this->redirectingDefaultAction = $redirectingDefaultAction;
        return $this;
    }

    /**
     * Getter for redirectingDefaultCallTimeout
     *
     * @ElementName redirectingDefaultCallTimeout
     * @return int|null
     */
    public function getRedirectingDefaultCallTimeout()
    {
        return $this->redirectingDefaultCallTimeout;
    }

    /**
     * Setter for redirectingDefaultCallTimeout
     *
     * @ElementName redirectingDefaultCallTimeout
     * @param int|null $redirectingDefaultCallTimeout
     * @return $this
     */
    public function setRedirectingDefaultCallTimeout($redirectingDefaultCallTimeout)
    {
        $this->redirectingDefaultCallTimeout = $redirectingDefaultCallTimeout;
        return $this;
    }

    /**
     * Getter for redirectingRule
     *
     * @ElementName redirectingRule
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalRedirectingRule[]
     */
    public function getRedirectingRule()
    {
        return $this->redirectingRule;
    }

    /**
     * Setter for redirectingRule
     *
     * @ElementName redirectingRule
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalRedirectingRule[] $redirectingRule
     * @return $this
     */
    public function setRedirectingRule($redirectingRule)
    {
        $this->redirectingRule = $redirectingRule;
        return $this;
    }

    /**
     * Adder for redirectingRule
     *
     * @ElementName redirectingRule
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalRedirectingRule $redirectingRule
     * @return $this
     */
    public function addRedirectingRule($redirectingRule)
    {
        $this->redirectingRule []= $redirectingRule;
        return $this;
    }

    /**
     * Getter for callMeNowDefaultAction
     *
     * @ElementName callMeNowDefaultAction
     * @return string|null
     */
    public function getCallMeNowDefaultAction()
    {
        return $this->callMeNowDefaultAction;
    }

    /**
     * Setter for callMeNowDefaultAction
     *
     * @ElementName callMeNowDefaultAction
     * @param string|null $callMeNowDefaultAction
     * @return $this
     */
    public function setCallMeNowDefaultAction($callMeNowDefaultAction)
    {
        $this->callMeNowDefaultAction = $callMeNowDefaultAction;
        return $this;
    }

    /**
     * Getter for callMeNowDefaultCallTimeout
     *
     * @ElementName callMeNowDefaultCallTimeout
     * @return int|null
     */
    public function getCallMeNowDefaultCallTimeout()
    {
        return $this->callMeNowDefaultCallTimeout;
    }

    /**
     * Setter for callMeNowDefaultCallTimeout
     *
     * @ElementName callMeNowDefaultCallTimeout
     * @param int|null $callMeNowDefaultCallTimeout
     * @return $this
     */
    public function setCallMeNowDefaultCallTimeout($callMeNowDefaultCallTimeout)
    {
        $this->callMeNowDefaultCallTimeout = $callMeNowDefaultCallTimeout;
        return $this;
    }

    /**
     * Getter for callMeNowRule
     *
     * @ElementName callMeNowRule
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule[]
     */
    public function getCallMeNowRule()
    {
        return $this->callMeNowRule;
    }

    /**
     * Setter for callMeNowRule
     *
     * @ElementName callMeNowRule
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule[] $callMeNowRule
     * @return $this
     */
    public function setCallMeNowRule($callMeNowRule)
    {
        $this->callMeNowRule = $callMeNowRule;
        return $this;
    }

    /**
     * Adder for callMeNowRule
     *
     * @ElementName callMeNowRule
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule $callMeNowRule
     * @return $this
     */
    public function addCallMeNowRule($callMeNowRule)
    {
        $this->callMeNowRule []= $callMeNowRule;
        return $this;
    }

    /**
     * Getter for incomingDefaultAction
     *
     * @ElementName incomingDefaultAction
     * @return string|null
     */
    public function getIncomingDefaultAction()
    {
        return $this->incomingDefaultAction;
    }

    /**
     * Setter for incomingDefaultAction
     *
     * @ElementName incomingDefaultAction
     * @param string|null $incomingDefaultAction
     * @return $this
     */
    public function setIncomingDefaultAction($incomingDefaultAction)
    {
        $this->incomingDefaultAction = $incomingDefaultAction;
        return $this;
    }

    /**
     * Getter for incomingDefaultCallTimeout
     *
     * @ElementName incomingDefaultCallTimeout
     * @return int|null
     */
    public function getIncomingDefaultCallTimeout()
    {
        return $this->incomingDefaultCallTimeout;
    }

    /**
     * Setter for incomingDefaultCallTimeout
     *
     * @ElementName incomingDefaultCallTimeout
     * @param int|null $incomingDefaultCallTimeout
     * @return $this
     */
    public function setIncomingDefaultCallTimeout($incomingDefaultCallTimeout)
    {
        $this->incomingDefaultCallTimeout = $incomingDefaultCallTimeout;
        return $this;
    }

    /**
     * Getter for incomingRule
     *
     * @ElementName incomingRule
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule[]
     */
    public function getIncomingRule()
    {
        return $this->incomingRule;
    }

    /**
     * Setter for incomingRule
     *
     * @ElementName incomingRule
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule[] $incomingRule
     * @return $this
     */
    public function setIncomingRule($incomingRule)
    {
        $this->incomingRule = $incomingRule;
        return $this;
    }

    /**
     * Adder for incomingRule
     *
     * @ElementName incomingRule
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule $incomingRule
     * @return $this
     */
    public function addIncomingRule($incomingRule)
    {
        $this->incomingRule []= $incomingRule;
        return $this;
    }

    /**
     * Getter for isDefault
     *
     * @ElementName isDefault
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Setter for isDefault
     *
     * @ElementName isDefault
     * @param bool|null $isDefault
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Getter for applyToAttendedCallTransfers
     *
     * @ElementName applyToAttendedCallTransfers
     * @return bool|null
     */
    public function getApplyToAttendedCallTransfers()
    {
        return $this->applyToAttendedCallTransfers;
    }

    /**
     * Setter for applyToAttendedCallTransfers
     *
     * @ElementName applyToAttendedCallTransfers
     * @param bool|null $applyToAttendedCallTransfers
     * @return $this
     */
    public function setApplyToAttendedCallTransfers($applyToAttendedCallTransfers)
    {
        $this->applyToAttendedCallTransfers = $applyToAttendedCallTransfers;
        return $this;
    }


}
