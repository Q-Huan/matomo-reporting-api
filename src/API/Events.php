<?php

namespace Matomo\ReportingApi\API;

/**
  The Events API lets you request reports about your users' Custom Events.  Events are tracked using the Javascript Tracker trackEvent() function, or using the [Tracking HTTP API](http://developer.matomo.org/api-reference/tracking-api).  <br/>An event is defined by an event category (Videos, Music, Games...), an event action (Play, Pause, Duration, Add Playlist, Downloaded, Clicked...), and an optional event name (a movie name, a song title, etc.) and an optional numeric value.  <br/>This API exposes the following Custom Events reports: <code>getCategory</code> lists the top Event Categories, <code>getAction</code> lists the top Event Actions, <code>getName</code> lists the top Event Names.  <br/>These Events report define the following metrics: nb_uniq_visitors, nb_visits, nb_events. If you define values for your events, you can expect to see the following metrics: nb_events_with_value, sum_event_value, min_event_value, max_event_value, avg_event_value  <br/>The Events.get* reports can be used with an optional <code>&secondaryDimension</code> parameter. Secondary dimension is the dimension used in the sub-table of the Event report you are requesting.  <br/>Here are the possible values of <code>secondaryDimension</code>: <ul> <li>For <code>Events.getCategory</code> you can set <code>secondaryDimension</code> to <code>eventAction</code> or <code>eventName</code>.</li> <li>For <code>Events.getAction</code> you can set <code>secondaryDimension</code> to <code>eventName</code> or <code>eventCategory</code>.</li> <li>For <code>Events.getName</code> you can set <code>secondaryDimension</code> to <code>eventAction</code> or <code>eventCategory</code>.</li> </ul>  <br/>For example, to request all Custom Events Categories, and for each, the top Event actions, you would request: <code>method=Events.getCategory&secondaryDimension=eventAction&flat=1</code>. You may also omit <code>&flat=1</code> in which case, to get top Event actions for one Event category, use <code>method=Events.getActionFromCategoryId</code> passing it the <code>&idSubtable=</code> of this Event category.    
*/
final class Events
{
        
    public function getCategory($idSite, $period, $date, $segment = false, $expanded = false, $secondaryDimension = false, $flat = false){
        //
    }
    
    public function getAction($idSite, $period, $date, $segment = false, $expanded = false, $secondaryDimension = false, $flat = false){
        //
    }
    
    public function getName($idSite, $period, $date, $segment = false, $expanded = false, $secondaryDimension = false, $flat = false){
        //
    }
    
    public function getActionFromCategoryId($idSite, $period, $date, $idSubtable, $segment = false){
        //
    }
    
    public function getNameFromCategoryId($idSite, $period, $date, $idSubtable, $segment = false){
        //
    }
    
    public function getCategoryFromActionId($idSite, $period, $date, $idSubtable, $segment = false){
        //
    }
    
    public function getNameFromActionId($idSite, $period, $date, $idSubtable, $segment = false){
        //
    }
    
    public function getActionFromNameId($idSite, $period, $date, $idSubtable, $segment = false){
        //
    }
    
    public function getCategoryFromNameId($idSite, $period, $date, $idSubtable, $segment = false){
        //
    }
}