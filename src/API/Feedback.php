<?php

namespace Matomo\ReportingApi\API;

/**
  API for plugin Feedback   
*/
final class Feedback
{
        /**
     * Sends feedback for a specific feature to the Matomo team or alternatively to the email address configured in the
     * config: "feedback_email_address".
     *
     * @param string      $featureName  The name of a feature you want to give feedback to.
     * @param bool|int    $like         Whether you like the feature or not
     * @param string|bool $message      A message containing the actual feedback
     */
    public function sendFeedbackForFeature($featureName, $like, $message = false){
        //
    }
}