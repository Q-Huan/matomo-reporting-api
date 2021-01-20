<?php

namespace Matomo\ReportingApi\API;

/**
  The SegmentEditor API lets you add, update, delete custom Segments, and list saved segments.   
*/
final class SegmentEditor
{
        
    public function isUserCanAddNewSegment($idSite){
        //
    }
    /**
     * Deletes a stored segment.
     *
     * @param $idSegment
     * @return bool
     */
    public function delete($idSegment){
        //
    }
    /**
     * Modifies an existing stored segment.
     *
     * @param int $idSegment The ID of the stored segment to modify.
     * @param string $name The new name of the segment.
     * @param string $definition The new definition of the segment.
     * @param bool $idSite If supplied, associates the stored segment with as single site.
     * @param bool $autoArchive Whether to automatically archive data with the segment or not.
     * @param bool $enabledAllUsers Whether the stored segment is viewable by all users or just the one that created it.
     *
     * @return bool
     */
    public function update($idSegment, $name, $definition, $idSite = false, $autoArchive = false, $enabledAllUsers = false){
        //
    }
    /**
     * Adds a new stored segment.
     *
     * @param string $name The new name of the segment.
     * @param string $definition The new definition of the segment.
     * @param bool $idSite If supplied, associates the stored segment with as single site.
     * @param bool $autoArchive Whether to automatically archive data with the segment or not.
     * @param bool $enabledAllUsers Whether the stored segment is viewable by all users or just the one that created it.
     *
     * @return int The newly created segment Id
     */
    public function add($name, $definition, $idSite = false, $autoArchive = false, $enabledAllUsers = false){
        //
    }
    /**
     * Returns a stored segment by ID
     *
     * @param $idSegment
     * @throws Exception
     * @return bool
     */
    public function get($idSegment){
        //
    }
    /**
     * Returns all stored segments.
     *
     * @param bool|int $idSite Whether to return stored segments for a specific idSite, or all of them. If supplied, must be a valid site ID.
     * @return array
     */
    public function getAll($idSite = false){
        //
    }
}