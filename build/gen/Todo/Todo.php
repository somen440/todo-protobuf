<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: todo.proto

namespace Todo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>todo.Todo</code>
 */
class Todo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>string title = 2;</code>
     */
    private $title = '';
    /**
     * Generated from protobuf field <code>bool checked = 3;</code>
     */
    private $checked = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type string $title
     *     @type bool $checked
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Todo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool checked = 3;</code>
     * @return bool
     */
    public function getChecked()
    {
        return $this->checked;
    }

    /**
     * Generated from protobuf field <code>bool checked = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setChecked($var)
    {
        GPBUtil::checkBool($var);
        $this->checked = $var;

        return $this;
    }

}

