<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/migration_entities.proto

namespace Google\Cloud\BigQuery\Migration\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Translation specific result details from the migration task.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.migration.v2.TranslationTaskResult</code>
 */
class TranslationTaskResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of the translated literals.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.migration.v2.Literal translated_literals = 1;</code>
     */
    private $translated_literals;
    /**
     * The records from the aggregate CSV report for a migration workflow.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.migration.v2.GcsReportLogMessage report_log_messages = 2;</code>
     */
    private $report_log_messages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\BigQuery\Migration\V2\Literal>|\Google\Protobuf\Internal\RepeatedField $translated_literals
     *           The list of the translated literals.
     *     @type array<\Google\Cloud\BigQuery\Migration\V2\GcsReportLogMessage>|\Google\Protobuf\Internal\RepeatedField $report_log_messages
     *           The records from the aggregate CSV report for a migration workflow.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Migration\V2\MigrationEntities::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of the translated literals.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.migration.v2.Literal translated_literals = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTranslatedLiterals()
    {
        return $this->translated_literals;
    }

    /**
     * The list of the translated literals.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.migration.v2.Literal translated_literals = 1;</code>
     * @param array<\Google\Cloud\BigQuery\Migration\V2\Literal>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTranslatedLiterals($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\Migration\V2\Literal::class);
        $this->translated_literals = $arr;

        return $this;
    }

    /**
     * The records from the aggregate CSV report for a migration workflow.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.migration.v2.GcsReportLogMessage report_log_messages = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReportLogMessages()
    {
        return $this->report_log_messages;
    }

    /**
     * The records from the aggregate CSV report for a migration workflow.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.migration.v2.GcsReportLogMessage report_log_messages = 2;</code>
     * @param array<\Google\Cloud\BigQuery\Migration\V2\GcsReportLogMessage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReportLogMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\Migration\V2\GcsReportLogMessage::class);
        $this->report_log_messages = $arr;

        return $this;
    }

}

