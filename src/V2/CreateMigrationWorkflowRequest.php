<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/migration_service.proto

namespace Google\Cloud\BigQuery\Migration\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to create a migration workflow resource.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.migration.v2.CreateMigrationWorkflowRequest</code>
 */
class CreateMigrationWorkflowRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project to which this migration workflow belongs.
     * Example: `projects/foo/locations/bar`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The migration workflow to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.MigrationWorkflow migration_workflow = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $migration_workflow = null;

    /**
     * @param string                                                $parent            Required. The name of the project to which this migration workflow belongs.
     *                                                                                 Example: `projects/foo/locations/bar`
     *                                                                                 Please see {@see MigrationServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\BigQuery\Migration\V2\MigrationWorkflow $migrationWorkflow Required. The migration workflow to create.
     *
     * @return \Google\Cloud\BigQuery\Migration\V2\CreateMigrationWorkflowRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\BigQuery\Migration\V2\MigrationWorkflow $migrationWorkflow): self
    {
        return (new self())
            ->setParent($parent)
            ->setMigrationWorkflow($migrationWorkflow);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the project to which this migration workflow belongs.
     *           Example: `projects/foo/locations/bar`
     *     @type \Google\Cloud\BigQuery\Migration\V2\MigrationWorkflow $migration_workflow
     *           Required. The migration workflow to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Migration\V2\MigrationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the project to which this migration workflow belongs.
     * Example: `projects/foo/locations/bar`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the project to which this migration workflow belongs.
     * Example: `projects/foo/locations/bar`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The migration workflow to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.MigrationWorkflow migration_workflow = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\MigrationWorkflow|null
     */
    public function getMigrationWorkflow()
    {
        return $this->migration_workflow;
    }

    public function hasMigrationWorkflow()
    {
        return isset($this->migration_workflow);
    }

    public function clearMigrationWorkflow()
    {
        unset($this->migration_workflow);
    }

    /**
     * Required. The migration workflow to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.MigrationWorkflow migration_workflow = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\MigrationWorkflow $var
     * @return $this
     */
    public function setMigrationWorkflow($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\MigrationWorkflow::class);
        $this->migration_workflow = $var;

        return $this;
    }

}

