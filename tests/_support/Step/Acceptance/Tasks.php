<?php

namespace Step\Acceptance;

class Tasks extends \AcceptanceTester
{
    /**
     * Navigate to tasks module
     */
    public function gotoTasks()
    {
        $I = new NavigationBarTester($this->getScenario());
        $I->clickAllMenuItem('Tasks');
    }
}
