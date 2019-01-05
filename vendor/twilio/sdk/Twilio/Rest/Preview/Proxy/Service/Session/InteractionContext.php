<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Proxy\Service\Session;

use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class InteractionContext extends InstanceContext {
    /**
     * Initialize the InteractionContext
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $serviceSid Service Sid.
     * @param string $sessionSid Session Sid.
     * @param string $sid A string that uniquely identifies this Interaction.
     * @return \Twilio\Rest\Preview\Proxy\Service\Session\InteractionContext 
     */
    public function __construct(Version $version, $serviceSid, $sessionSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array(
            'serviceSid' => $serviceSid,
            'sessionSid' => $sessionSid,
            'sid' => $sid,
        );

        $this->uri = '/Services/' . rawurlencode($serviceSid) . '/Sessions/' . rawurlencode($sessionSid) . '/Interactions/' . rawurlencode($sid) . '';
    }

    /**
     * Fetch a InteractionInstance
     * 
     * @return InteractionInstance Fetched InteractionInstance
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new InteractionInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sessionSid'],
            $this->solution['sid']
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Preview.Proxy.InteractionContext ' . implode(' ', $context) . ']';
    }
}