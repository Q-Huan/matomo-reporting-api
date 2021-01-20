<?php

namespace Matomo\ReportingApi\API;

/**
  API for annotations plugin. Provides methods to create, modify, delete & query annotations.   
*/
final class Annotations
{
        /**
     * Create a new annotation for a site.
     *
     * @param string $idSite The site ID to add the annotation to.
     * @param string $date The date the annotation is attached to.
     * @param string $note The text of the annotation.
     * @param int $starred Either 0 or 1. Whether the annotation should be starred.
     * @return array Returns an array of two elements. The first element (indexed by
     *               'annotation') is the new annotation. The second element (indexed
     *               by 'idNote' is the new note's ID).
     */
    public function add($idSite, $date, $note, $starred = 0){
        //
    }
    /**
     * Modifies an annotation for a site and returns the modified annotation
     * and its ID.
     *
     * If the current user is not allowed to modify an annotation, an exception
     * will be thrown. A user can modify a note if:
     *  - the user has admin access for the site, OR
     *  - the user has view access, is not the anonymous user and is the user that
     *    created the note
     *
     * @param string $idSite The site ID to add the annotation to.
     * @param string $idNote The ID of the note.
     * @param string|null $date The date the annotation is attached to. If null, the annotation's
     *                          date is not modified.
     * @param string|null $note The text of the annotation. If null, the annotation's text
     *                          is not modified.
     * @param string|null $starred Either 0 or 1. Whether the annotation should be starred.
     *                             If null, the annotation is not starred/un-starred.
     * @return array Returns an array of two elements. The first element (indexed by
     *               'annotation') is the new annotation. The second element (indexed
     *               by 'idNote' is the new note's ID).
     */
    public function save($idSite, $idNote, $date = null, $note = null, $starred = null){
        //
    }
    /**
     * Removes an annotation from a site's list of annotations.
     *
     * If the current user is not allowed to delete the annotation, an exception
     * will be thrown. A user can delete a note if:
     *  - the user has admin access for the site, OR
     *  - the user has view access, is not the anonymous user and is the user that
     *    created the note
     *
     * @param string $idSite The site ID to add the annotation to.
     * @param string $idNote The ID of the note to delete.
     */
    public function delete($idSite, $idNote){
        //
    }
    /**
     * Removes all annotations for a single site. Only super users can use this method.
     *
     * @param string $idSite The ID of the site to remove annotations for.
     */
    public function deleteAll($idSite){
        //
    }
    /**
     * Returns a single note for one site.
     *
     * @param string $idSite The site ID to add the annotation to.
     * @param string $idNote The ID of the note to get.
     * @return array The annotation. It will contain the following properties:
     *               - date: The date the annotation was recorded for.
     *               - note: The note text.
     *               - starred: Whether the note is starred or not.
     *               - user: The user that created the note.
     *               - canEditOrDelete: Whether the user that called this method can edit or
     *                                  delete the annotation returned.
     */
    public function get($idSite, $idNote){
        //
    }
    /**
     * Returns every annotation for a specific site within a specific date range.
     * The date range is specified by a date, the period type (day/week/month/year)
     * and an optional number of N periods in the past to include.
     *
     * @param string $idSite The site ID to add the annotation to. Can be one ID or
     *                       a list of site IDs.
     * @param bool|string $date The date of the period.
     * @param string $period The period type.
     * @param bool|int $lastN Whether to include the last N number of periods in the
     *                         date range or not.
     * @return array An array that indexes arrays of annotations by site ID. ie,
     *               array(
     *                 5 => array(
     *                   array(...), // annotation #1
     *                   array(...), // annotation #2
     *                 ),
     *                 8 => array(...)
     *               )
     */
    public function getAll($idSite, $date = false, $period = 'day', $lastN = false){
        //
    }
    /**
     * Returns the count of annotations for a list of periods, including the count of
     * starred annotations.
     *
     * @param string $idSite The site ID to add the annotation to.
     * @param string|bool $date The date of the period.
     * @param string $period The period type.
     * @param int|bool $lastN Whether to get counts for the last N number of periods or not.
     * @param bool $getAnnotationText
     * @return array An array mapping site IDs to arrays holding dates & the count of
     *               annotations made for those dates. eg,
     *               array(
     *                 5 => array(
     *                   array('2012-01-02', array('count' => 4, 'starred' => 2)),
     *                   array('2012-01-03', array('count' => 0, 'starred' => 0)),
     *                   array('2012-01-04', array('count' => 2, 'starred' => 0)),
     *                 ),
     *                 6 => array(
     *                   array('2012-01-02', array('count' => 1, 'starred' => 0)),
     *                   array('2012-01-03', array('count' => 4, 'starred' => 3)),
     *                   array('2012-01-04', array('count' => 2, 'starred' => 0)),
     *                 ),
     *                 ...
     *               )
     */
    public function getAnnotationCountForDates($idSite, $date, $period, $lastN = false, $getAnnotationText = false){
        //
    }
}