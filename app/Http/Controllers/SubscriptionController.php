<?php

namespace App\Http\Controllers;

use App\Paypal\CreatePlan;

class SubscriptionController extends Controller
{
    public function createPlane()
    {
        $plan = new CreatePlan;
        $plan->create();
    }

    public function listPlan()
    {
        $plan = new CreatePlan;
        return $plan->listPlan();
    }
}
