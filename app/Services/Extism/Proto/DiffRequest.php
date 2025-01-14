<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace App\Services\Extism\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `POST /api/v1/diff:`
 * Return the diff of two modules
 *
 * Generated from protobuf message <code>DiffRequest</code>
 */
class DiffRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 module1 = 1;</code>
     */
    protected $module1 = 0;
    /**
     * Generated from protobuf field <code>int64 module2 = 2;</code>
     */
    protected $module2 = 0;
    /**
     * Generated from protobuf field <code>bool color_terminal = 3;</code>
     */
    protected $color_terminal = false;
    /**
     * Generated from protobuf field <code>bool with_context = 4;</code>
     */
    protected $with_context = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $module1
     *     @type int|string $module2
     *     @type bool $color_terminal
     *     @type bool $with_context
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 module1 = 1;</code>
     * @return int|string
     */
    public function getModule1()
    {
        return $this->module1;
    }

    /**
     * Generated from protobuf field <code>int64 module1 = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setModule1($var)
    {
        GPBUtil::checkInt64($var);
        $this->module1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 module2 = 2;</code>
     * @return int|string
     */
    public function getModule2()
    {
        return $this->module2;
    }

    /**
     * Generated from protobuf field <code>int64 module2 = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setModule2($var)
    {
        GPBUtil::checkInt64($var);
        $this->module2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool color_terminal = 3;</code>
     * @return bool
     */
    public function getColorTerminal()
    {
        return $this->color_terminal;
    }

    /**
     * Generated from protobuf field <code>bool color_terminal = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setColorTerminal($var)
    {
        GPBUtil::checkBool($var);
        $this->color_terminal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool with_context = 4;</code>
     * @return bool
     */
    public function getWithContext()
    {
        return $this->with_context;
    }

    /**
     * Generated from protobuf field <code>bool with_context = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithContext($var)
    {
        GPBUtil::checkBool($var);
        $this->with_context = $var;

        return $this;
    }

}

