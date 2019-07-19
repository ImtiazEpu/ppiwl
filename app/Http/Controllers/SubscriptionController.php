<?php

namespace App\Http\Controllers;

use App\Paypal\SubscriptionPlan;

class SubscriptionController extends Controller
{
    public function createPlane()
    {
        $plan = new SubscriptionPlan;
        $plan->create();
    }

    public function listPlan()
    {
        $plan = new SubscriptionPlan;
        return $plan->listPlan();
    }

    public function showPlan($id)
    {
        $plan = new SubscriptionPlan;
        return $plan->PlanDetails($id);
    }

    public function planActivate($id)
    {
        $plane = new SubscriptionPlan;
        return $plane->PlanActivate($id);
    }
}
