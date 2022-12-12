<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/feed.proto

namespace Google\Ads\GoogleAds\V8\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Operation to be performed on a feed attribute list in a mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.resources.FeedAttributeOperation</code>
 */
class FeedAttributeOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Type of list operation to perform.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.FeedAttributeOperation.Operator operator = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $operator = 0;
    /**
     * Output only. The feed attribute being added to the list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.FeedAttribute value = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operator
     *           Output only. Type of list operation to perform.
     *     @type \Google\Ads\GoogleAds\V8\Resources\FeedAttribute $value
     *           Output only. The feed attribute being added to the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Resources\Feed::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Type of list operation to perform.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.FeedAttributeOperation.Operator operator = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Output only. Type of list operation to perform.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.FeedAttributeOperation.Operator operator = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V8\Resources\FeedAttributeOperation\Operator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * Output only. The feed attribute being added to the list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.FeedAttribute value = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V8\Resources\FeedAttribute|null
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : null;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Output only. The feed attribute being added to the list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.FeedAttribute value = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V8\Resources\FeedAttribute $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Resources\FeedAttribute::class);
        $this->value = $var;

        return $this;
    }

}

