<?php

/**
 * ReportGroupTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ReportGroupTable extends PluginReportGroupTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ReportGroupTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ReportGroup');
    }
}