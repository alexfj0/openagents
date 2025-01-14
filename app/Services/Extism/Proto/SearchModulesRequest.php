<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace App\Services\Extism\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `POST /api/v1/search:`
 * Search for modules based on filter params provided (which should be any
 * dimension of the module schema, or string search in any metadata value).
 * Return a paginated list of matching modules.
 *
 * Generated from protobuf message <code>SearchModulesRequest</code>
 */
class SearchModulesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ID for this module, generated by the database.
     *
     * Generated from protobuf field <code>optional int64 id = 1;</code>
     */
    protected $id = null;
    /**
     * original name of the binary module file
     *
     * Generated from protobuf field <code>optional string hash = 3;</code>
     */
    protected $hash = null;
    /**
     * function imports called by the module (see:
     * <https://github.com/WebAssembly/design/blob/main/Modules.md#imports>)
     *
     * Generated from protobuf field <code>repeated .Import imports = 4;</code>
     */
    private $imports;
    /**
     * function exports provided by the module (see:
     * <https://github.com/WebAssembly/design/blob/main/Modules.md#exports>)
     *
     * Generated from protobuf field <code>repeated .Export exports = 5;</code>
     */
    private $exports;
    /**
     * minimum size in bytes of the module
     *
     * Generated from protobuf field <code>optional uint64 min_size = 6;</code>
     */
    protected $min_size = null;
    /**
     * maximum size in bytes of the module
     *
     * Generated from protobuf field <code>optional uint64 max_size = 7;</code>
     */
    protected $max_size = null;
    /**
     * optional path or locator to the module (TODO: maybe this is better stored
     * as metadata)
     *
     * Generated from protobuf field <code>optional string location = 8;</code>
     */
    protected $location = null;
    /**
     * programming language used to produce this module
     *
     * Generated from protobuf field <code>optional .SourceLanguage source_language = 9;</code>
     */
    protected $source_language = null;
    /**
     * arbitrary metadata provided by the operator of this module
     *
     * Generated from protobuf field <code>map<string, string> metadata = 10;</code>
     */
    private $metadata;
    /**
     * timestamp when this module was loaded and stored
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp inserted_before = 11;</code>
     */
    protected $inserted_before = null;
    /**
     * timestamp when this module was loaded and stored
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp inserted_after = 12;</code>
     */
    protected $inserted_after = null;
    /**
     * the interned strings stored in the wasm binary (panic/abort messages, etc.)
     *
     * Generated from protobuf field <code>repeated string strings = 13;</code>
     */
    private $strings;
    /**
     * match on any function name in an import or export.
     *
     * Generated from protobuf field <code>optional string function_name = 14;</code>
     */
    protected $function_name = null;
    /**
     * match on the module name e.g. `env` or `wasi_snapshot_preview1`
     *
     * Generated from protobuf field <code>optional string module_name = 15;</code>
     */
    protected $module_name = null;
    /**
     * Generated from protobuf field <code>.Pagination pagination = 16;</code>
     */
    protected $pagination = null;
    /**
     * Generated from protobuf field <code>.Sort sort = 17;</code>
     */
    protected $sort = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *           ID for this module, generated by the database.
     *     @type string $hash
     *           original name of the binary module file
     *     @type array<\App\Services\Extism\Proto\Import>|\Google\Protobuf\Internal\RepeatedField $imports
     *           function imports called by the module (see:
     *           <https://github.com/WebAssembly/design/blob/main/Modules.md#imports>)
     *     @type array<\App\Services\Extism\Proto\Export>|\Google\Protobuf\Internal\RepeatedField $exports
     *           function exports provided by the module (see:
     *           <https://github.com/WebAssembly/design/blob/main/Modules.md#exports>)
     *     @type int|string $min_size
     *           minimum size in bytes of the module
     *     @type int|string $max_size
     *           maximum size in bytes of the module
     *     @type string $location
     *           optional path or locator to the module (TODO: maybe this is better stored
     *           as metadata)
     *     @type int $source_language
     *           programming language used to produce this module
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           arbitrary metadata provided by the operator of this module
     *     @type \Google\Protobuf\Timestamp $inserted_before
     *           timestamp when this module was loaded and stored
     *     @type \Google\Protobuf\Timestamp $inserted_after
     *           timestamp when this module was loaded and stored
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $strings
     *           the interned strings stored in the wasm binary (panic/abort messages, etc.)
     *     @type string $function_name
     *           match on any function name in an import or export.
     *     @type string $module_name
     *           match on the module name e.g. `env` or `wasi_snapshot_preview1`
     *     @type \App\Services\Extism\Proto\Pagination $pagination
     *     @type \App\Services\Extism\Proto\Sort $sort
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * ID for this module, generated by the database.
     *
     * Generated from protobuf field <code>optional int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * ID for this module, generated by the database.
     *
     * Generated from protobuf field <code>optional int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * original name of the binary module file
     *
     * Generated from protobuf field <code>optional string hash = 3;</code>
     * @return string
     */
    public function getHash()
    {
        return isset($this->hash) ? $this->hash : '';
    }

    public function hasHash()
    {
        return isset($this->hash);
    }

    public function clearHash()
    {
        unset($this->hash);
    }

    /**
     * original name of the binary module file
     *
     * Generated from protobuf field <code>optional string hash = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->hash = $var;

        return $this;
    }

    /**
     * function imports called by the module (see:
     * <https://github.com/WebAssembly/design/blob/main/Modules.md#imports>)
     *
     * Generated from protobuf field <code>repeated .Import imports = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImports()
    {
        return $this->imports;
    }

    /**
     * function imports called by the module (see:
     * <https://github.com/WebAssembly/design/blob/main/Modules.md#imports>)
     *
     * Generated from protobuf field <code>repeated .Import imports = 4;</code>
     * @param array<\App\Services\Extism\Proto\Import>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImports($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \App\Services\Extism\Proto\Import::class);
        $this->imports = $arr;

        return $this;
    }

    /**
     * function exports provided by the module (see:
     * <https://github.com/WebAssembly/design/blob/main/Modules.md#exports>)
     *
     * Generated from protobuf field <code>repeated .Export exports = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExports()
    {
        return $this->exports;
    }

    /**
     * function exports provided by the module (see:
     * <https://github.com/WebAssembly/design/blob/main/Modules.md#exports>)
     *
     * Generated from protobuf field <code>repeated .Export exports = 5;</code>
     * @param array<\App\Services\Extism\Proto\Export>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExports($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \App\Services\Extism\Proto\Export::class);
        $this->exports = $arr;

        return $this;
    }

    /**
     * minimum size in bytes of the module
     *
     * Generated from protobuf field <code>optional uint64 min_size = 6;</code>
     * @return int|string
     */
    public function getMinSize()
    {
        return isset($this->min_size) ? $this->min_size : 0;
    }

    public function hasMinSize()
    {
        return isset($this->min_size);
    }

    public function clearMinSize()
    {
        unset($this->min_size);
    }

    /**
     * minimum size in bytes of the module
     *
     * Generated from protobuf field <code>optional uint64 min_size = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinSize($var)
    {
        GPBUtil::checkUint64($var);
        $this->min_size = $var;

        return $this;
    }

    /**
     * maximum size in bytes of the module
     *
     * Generated from protobuf field <code>optional uint64 max_size = 7;</code>
     * @return int|string
     */
    public function getMaxSize()
    {
        return isset($this->max_size) ? $this->max_size : 0;
    }

    public function hasMaxSize()
    {
        return isset($this->max_size);
    }

    public function clearMaxSize()
    {
        unset($this->max_size);
    }

    /**
     * maximum size in bytes of the module
     *
     * Generated from protobuf field <code>optional uint64 max_size = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxSize($var)
    {
        GPBUtil::checkUint64($var);
        $this->max_size = $var;

        return $this;
    }

    /**
     * optional path or locator to the module (TODO: maybe this is better stored
     * as metadata)
     *
     * Generated from protobuf field <code>optional string location = 8;</code>
     * @return string
     */
    public function getLocation()
    {
        return isset($this->location) ? $this->location : '';
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * optional path or locator to the module (TODO: maybe this is better stored
     * as metadata)
     *
     * Generated from protobuf field <code>optional string location = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * programming language used to produce this module
     *
     * Generated from protobuf field <code>optional .SourceLanguage source_language = 9;</code>
     * @return int
     */
    public function getSourceLanguage()
    {
        return isset($this->source_language) ? $this->source_language : 0;
    }

    public function hasSourceLanguage()
    {
        return isset($this->source_language);
    }

    public function clearSourceLanguage()
    {
        unset($this->source_language);
    }

    /**
     * programming language used to produce this module
     *
     * Generated from protobuf field <code>optional .SourceLanguage source_language = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setSourceLanguage($var)
    {
        GPBUtil::checkEnum($var, \App\Services\Extism\Proto\SourceLanguage::class);
        $this->source_language = $var;

        return $this;
    }

    /**
     * arbitrary metadata provided by the operator of this module
     *
     * Generated from protobuf field <code>map<string, string> metadata = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * arbitrary metadata provided by the operator of this module
     *
     * Generated from protobuf field <code>map<string, string> metadata = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * timestamp when this module was loaded and stored
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp inserted_before = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getInsertedBefore()
    {
        return $this->inserted_before;
    }

    public function hasInsertedBefore()
    {
        return isset($this->inserted_before);
    }

    public function clearInsertedBefore()
    {
        unset($this->inserted_before);
    }

    /**
     * timestamp when this module was loaded and stored
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp inserted_before = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setInsertedBefore($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->inserted_before = $var;

        return $this;
    }

    /**
     * timestamp when this module was loaded and stored
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp inserted_after = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getInsertedAfter()
    {
        return $this->inserted_after;
    }

    public function hasInsertedAfter()
    {
        return isset($this->inserted_after);
    }

    public function clearInsertedAfter()
    {
        unset($this->inserted_after);
    }

    /**
     * timestamp when this module was loaded and stored
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp inserted_after = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setInsertedAfter($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->inserted_after = $var;

        return $this;
    }

    /**
     * the interned strings stored in the wasm binary (panic/abort messages, etc.)
     *
     * Generated from protobuf field <code>repeated string strings = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStrings()
    {
        return $this->strings;
    }

    /**
     * the interned strings stored in the wasm binary (panic/abort messages, etc.)
     *
     * Generated from protobuf field <code>repeated string strings = 13;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStrings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->strings = $arr;

        return $this;
    }

    /**
     * match on any function name in an import or export.
     *
     * Generated from protobuf field <code>optional string function_name = 14;</code>
     * @return string
     */
    public function getFunctionName()
    {
        return isset($this->function_name) ? $this->function_name : '';
    }

    public function hasFunctionName()
    {
        return isset($this->function_name);
    }

    public function clearFunctionName()
    {
        unset($this->function_name);
    }

    /**
     * match on any function name in an import or export.
     *
     * Generated from protobuf field <code>optional string function_name = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setFunctionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->function_name = $var;

        return $this;
    }

    /**
     * match on the module name e.g. `env` or `wasi_snapshot_preview1`
     *
     * Generated from protobuf field <code>optional string module_name = 15;</code>
     * @return string
     */
    public function getModuleName()
    {
        return isset($this->module_name) ? $this->module_name : '';
    }

    public function hasModuleName()
    {
        return isset($this->module_name);
    }

    public function clearModuleName()
    {
        unset($this->module_name);
    }

    /**
     * match on the module name e.g. `env` or `wasi_snapshot_preview1`
     *
     * Generated from protobuf field <code>optional string module_name = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setModuleName($var)
    {
        GPBUtil::checkString($var, True);
        $this->module_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Pagination pagination = 16;</code>
     * @return \App\Services\Extism\Proto\Pagination|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    public function hasPagination()
    {
        return isset($this->pagination);
    }

    public function clearPagination()
    {
        unset($this->pagination);
    }

    /**
     * Generated from protobuf field <code>.Pagination pagination = 16;</code>
     * @param \App\Services\Extism\Proto\Pagination $var
     * @return $this
     */
    public function setPagination($var)
    {
        GPBUtil::checkMessage($var, \App\Services\Extism\Proto\Pagination::class);
        $this->pagination = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Sort sort = 17;</code>
     * @return \App\Services\Extism\Proto\Sort|null
     */
    public function getSort()
    {
        return $this->sort;
    }

    public function hasSort()
    {
        return isset($this->sort);
    }

    public function clearSort()
    {
        unset($this->sort);
    }

    /**
     * Generated from protobuf field <code>.Sort sort = 17;</code>
     * @param \App\Services\Extism\Proto\Sort $var
     * @return $this
     */
    public function setSort($var)
    {
        GPBUtil::checkMessage($var, \App\Services\Extism\Proto\Sort::class);
        $this->sort = $var;

        return $this;
    }

}

