<?php

namespace Matomo\ReportingApi\API;

/**
  API for Tour plugin which helps you getting familiar with Matomo.   
*/
final class Tour
{
        /**
     * Get all challenges that can be completed by a super user.
     *
     * @return array[]
     */
    public function getChallenges(){
        //
    }
    /**
     * Skip a specific challenge.
     *
     * @param string $id
     * @return bool
     * @throws \Exception
     */
    public function skipChallenge($id){
        //
    }
    /**
     * Get details about the current level this user has progressed to.
     * @return array
     */
    public function getLevel(){
        //
    }
}