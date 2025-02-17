<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
//use App\Models\ManualPayment;
use Illuminate\Http\Request;
//use Modules\SetupGuide\Entities\SetupGuide;
use App\Helpers\helpers;


class PaymentController extends Controller
{
    public function __construct()
    {
        // $this->middleware('access_limitation')->only([
        //     'update',
        //     'manualPaymentUpdate',
        //     'manualPaymentDelete',
        //     'manualPaymentStatus',
        // ]);
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     **/
    public function autoPayment()
    {
        // abort_if(! userCan('setting.view'), 403);
        return view('admin.general_setting.pages.payment');
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        switch ($request->type) {
            case 'paypal':
                $this->paypalUpdate($request);
                break;
            case 'stripe':
                $this->stripeUpdate($request);
                break;
             case 'chapa':
                $this->chapaUpdate($request);
                break;
            case 'razorpay':
                $this->razorpayUpdate($request);
                break;
            case 'ssl_commerz':
                $this->sslcommerzUpdate($request);
                break;
            case 'paystack':
                $this->paystackUpdate($request);
                break;
            case 'flutterwave':
                $this->flutterwaveUpdate($request);
                break;
            case 'midtrans':
                $this->midtransUpdate($request);
                break;
            case 'mollie':
                $this->mollieUpdate($request);
                break;
            case 'instamojo':
                $this->instamojoUpdate($request);
                break;
            case 'wire':
                $this->wireTransferUpdate($request);
                break;
        }

       // SetupGuide::where('task_name', 'payment_setting')->update(['status' => 1]);
    } 

    /**
     * Update the paypal configuration.
     */
    public function paypalUpdate(Request $request)
    {
        if(!env('USER_VERIFIED'))
        {
             flashError(__('This feature is disable for demo!'));
        return redirect()->route('admin.general_setting.pages.payment')->send();
        }
        $request->validate([
            'paypal_client_id' => 'required',
            'paypal_client_secret' => 'required',
        ]);

        if ($request->paypal_live_mode) {
            checkSetEnv('PAYPAL_LIVE_CLIENT_ID', $request->paypal_client_id);
            checkSetEnv('PAYPAL_LIVE_CLIENT_SECRET', $request->paypal_client_secret);
        } else {
            checkSetEnv('PAYPAL_SANDBOX_CLIENT_ID', $request->paypal_client_id);
            checkSetEnv('PAYPAL_SANDBOX_CLIENT_SECRET', $request->paypal_client_secret);
        }

        setEnv('PAYPAL_MODE', $request->paypal_live_mode ? 'live' : 'sandbox');
        setEnv('PAYPAL_ACTIVE', $request->paypal ? 'true' : 'false');

  flashSuccess(__('paypal_setting_updated_successfully'));
        // return redirect()->route('admin.general_setting.pages.payment')->with('success', 'paypal_setting_updated_successfully');

   return redirect()->route('admin.general_setting.pages.payment')->send();
    }

    /**
     * Update the stripe configuration.
     */
    public function stripeUpdate(Request $request)
    {
        if(!env('USER_VERIFIED'))
        {
             flashError(__('This feature is disable for demo!'));
        return redirect()->route('admin.general_setting.pages.payment')->send();
        }
        $request->validate([
            'stripe_key' => 'required',
            'stripe_secret' => 'required',
        ]);

        checkSetEnv('STRIPE_PUBLIC_KEY', $request->stripe_key);
        checkSetEnv('STRIPE_SECRET_KEY', $request->stripe_secret);
        setEnv('STRIPE_ACTIVE', $request->stripe ? 'true' : 'false');

        flashSuccess(__('stripe_setting_updated_successfully'));

        return redirect()->route('admin.general_setting.pages.payment')->send();
    }

     public function wireTransferUpdate(Request $request)
        {
            $request->validate([
                'wire_transfer' => '',
            ]);

            putenv('WIRE_TRANSFER=' . ($request->wire_transfer ? 'true' : 'false'));

            // Reload the environment variables
            $this->loadEnvironmentVariables();
            flashSuccess(__('wire_transfer_setting_updated_successfully'));

                return redirect()->route('settings.payment')->send();

        }

    /**
     * Update the Chapa configuration.
     */
    public function chapaUpdate(Request $request)
    {

        if(!env('USER_VERIFIED'))
        {
             flashError(__('This feature is disable for demo!'));
        return redirect()->route('admin.general_setting.pages.payment')->send();
        }

        $request->validate([
            'chapa_secret' => 'required',
            'chapa_public' => 'required',
            'chapa_webhook' => '',

        ]);

        checkSetEnv('CHAPA_SECRET_KEY', $request->chapa_secret);
        checkSetEnv('CHAPA_PUBLIC_KEY', $request->chapa_public);
        checkSetEnv('CHAPA_WEBHOOK_SECRET', $request->chapa_webhook);
        setEnv('CHAPA_ACTIVE', $request->chapa ? 'true' : 'false');

        flashSuccess(__('chapa_setting_updated_successfully'));

        return redirect()->route('admin.general_setting.pages.payment')->send();
    }

    /**
     * Update the razorpay configuration.
     */
    public function razorpayUpdate(Request $request)
    {
        if(!env('USER_VERIFIED'))
        {
             flashError(__('This feature is disable for demo!'));
        return redirect()->route('admin.general_setting.pages.payment')->send();
        }
        $request->validate([
            'razorpay_key' => 'required',
            'razorpay_secret' => 'required',
        ]);

        checkSetEnv('RAZORPAY_KEY', $request->razorpay_key);
        checkSetEnv('RAZORPAY_SECRET', $request->razorpay_secret);
        setEnv('RAZORPAY_ACTIVE', $request->razorpay ? 'true' : 'false');

        flashSuccess(__('razorpay_setting_updated_successfully'));

        return redirect()->route('admin.general_setting.pages.payment')->send();
    }

    /**
     * Update the sslcommerz configuration.
     */
    public function sslcommerzUpdate(Request $request)
    {
        if(!env('USER_VERIFIED'))
        {
             flashError(__('This feature is disable for demo!'));
        return redirect()->route('admin.general_setting.pages.payment')->send();
        }
        $request->validate([
            'store_id' => 'required',
            'store_password' => 'required',
        ]);

        checkSetEnv('SSLCOMMERZ_MODE', $request->ssl_mode ? 'live' : 'sandbox');
        checkSetEnv('STORE_ID', $request->store_id);
        checkSetEnv('STORE_PASSWORD', $request->store_password);
        setEnv('SSLCOMMERZ_ACTIVE', $request->ssl_commerz ? 'true' : 'false');

        flashSuccess(__('ssl_commerz_setting_updated_successfully'));

        return redirect()->route('settings.payment')->send();
    }

    /**
     * Update the paystack configuration.
     */
    public function paystackUpdate(Request $request)
    {
        if(!env('USER_VERIFIED'))
        {
             flashError(__('This feature is disable for demo!'));
        return redirect()->route('admin.general_setting.pages.payment')->send();
        }
        $request->validate([
            'paystack_public_key' => 'required',
            'paystack_secret_key' => 'required',
            'merchant_email' => 'required',
        ]);

        checkSetEnv('PAYSTACK_PUBLIC_KEY', $request->paystack_public_key);
        checkSetEnv('PAYSTACK_SECRET_KEY', $request->paystack_secret_key);
        checkSetEnv('MERCHANT_EMAIL', $request->merchant_email);
        setEnv('PAYSTACK_ACTIVE', $request->paystack ? 'true' : 'false');

        flashSuccess(__('paystack_setting_updated_successfully'));

        return redirect()->route('settings.payment')->send();
    }

    /**
     * Update the flutterwave configuration.
     */
    public function flutterwaveUpdate(Request $request)
    {
        if(!env('USER_VERIFIED'))
        {
             flashError(__('This feature is disable for demo!'));
        return redirect()->route('admin.general_setting.pages.payment')->send();
        }
        $request->validate([
            'flw_public_key' => 'required',
            'flw_secret_key' => 'required',
            'flw_secret_hash' => 'required',
        ]);

        checkSetEnv('FLW_PUBLIC_KEY', $request->flw_public_key);
        checkSetEnv('FLW_SECRET_KEY', $request->flw_secret_key);
        checkSetEnv('FLW_SECRET_HASH', $request->flw_secret_hash);
        setEnv('FLW_ACTIVE', $request->flutterwave ? 'true' : 'false');

        flashSuccess(__('flutter_setting_updated_successfully'));

        return redirect()->route('settings.payment')->send();
    }

    /**
     * Update the midtrans configuration.
     */
    public function midtransUpdate(Request $request)
    {
        if(!env('USER_VERIFIED'))
        {
             flashError(__('This feature is disable for demo!'));
        return redirect()->route('admin.general_setting.pages.payment')->send();
        }
        $request->validate([
            'midtrans_merchat_id' => 'required',
            'midtrans_client_key' => 'required',
            'midtrans_server_key' => 'required',
        ]);

        checkSetEnv('MIDTRANS_MERCHAT_ID', $request->midtrans_merchat_id);
        checkSetEnv('MIDTRANS_CLIENT_KEY', $request->midtrans_client_key);
        checkSetEnv('MIDTRANS_SERVER_KEY', $request->midtrans_server_key);
        setEnv('MIDTRANS_ACTIVE', $request->midtrans ? 'true' : 'false');
        setEnv('MIDTRANS_LIVE_MODE', $request->midtrans_live_mode ? 'true' : 'false');

        flashSuccess(__('midtrans_setting_updated_successfully'));

        return redirect()->route('settings.payment')->send();
    }

    /**
     * Update the mollie configuration.
     */

    public function mollieUpdate(Request $request)
{
    if(!env('USER_VERIFIED'))
        {
             flashError(__('This feature is disable for demo!'));
        return redirect()->route('admin.general_setting.pages.payment')->send();
        }
    $request->validate([
        'mollie_key' => 'required',
    ]);

    // Set MOLLIE_KEY and MOLLIE_ACTIVE in the .env file
    putenv('MOLLIE_KEY=' . $request->mollie_key);
    putenv('MOLLIE_ACTIVE=' . ($request->mollie ? 'true' : 'false'));

    // Reload the environment variables
    $this->loadEnvironmentVariables();

    flashSuccess(__('mollie_setting_updated_successfully'));

        return redirect()->route('settings.payment')->send();

}




/**
 * Reloads the environment variables used by the application.
 *
 * This method is necessary to ensure that changes made to the .env file take effect immediately.
 */
protected function loadEnvironmentVariables()
{
    $dotenv = \Dotenv\Dotenv::createImmutable(base_path());
    $dotenv->load();
}


    // public function mollieUpdate(Request $request)
    // {
    //     $request->validate([
    //         'mollie_key' => 'required',
    //     ]);

    //   Env('MOLLIE_KEY', $request->mollie_key);
    //     Env('MOLLIE_ACTIVE', $request->mollie ? 'true' : 'false');

    //    // flashSuccess(__('mollie_setting_updated_successfully'));

    //     //return redirect()->route('settings.payment')->send();

    //       return redirect()->route('admin.general_setting.pages.payment')->with('success', 'mollie_setting_updated_successfully');
    // }

    /**
     * Update the instamojo configuration.
     */
    public function instamojoUpdate(Request $request)
    {
        if(!env('USER_VERIFIED'))
        {
             flashError(__('This feature is disable for demo!'));
        return redirect()->route('admin.general_setting.pages.payment')->send();
        }
        $request->validate([
            'im_key' => 'required',
            'im_secret' => 'required',
        ], [
            'im_key.required' => 'Instamojo Key is required',
            'im_secret.required' => 'Instamojo Secret is required',
        ]);

        checkSetEnv('IM_API_KEY', $request->im_key);
        checkSetEnv('IM_AUTH_TOKEN', $request->im_secret);
        setEnv('IM_ACTIVE', $request->instamojo ? 'true' : 'false');

        flashSuccess(__('instamojo_setting_updated_successfully'));

        return redirect()->route('settings.payment')->send();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manualPayment()
    {
        abort_if(! userCan('setting.view'), 403);

        $manual_payment_gateways = ManualPayment::all();

        return view('admin.general_setting.payment-manual', compact('manual_payment_gateways'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function manualPaymentStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        ManualPayment::create([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
        ]);

        flashSuccess(__('manual_payment_created_successfully'));

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function manualPaymentEdit(ManualPayment $manual_payment)
    {
        $manual_payment_gateways = ManualPayment::all();

        return view('backend.settings.pages.payment-manual', compact('manual_payment_gateways', 'manual_payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function manualPaymentUpdate(Request $request, ManualPayment $manual_payment)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        $manual_payment->update([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
        ]);

        flashSuccess(__('manual_payment_updated_successfully'));

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function manualPaymentDelete(ManualPayment $manual_payment)
    {
        if(!env('USER_VERIFIED'))
        {
             flashError(__('This feature is disable for demo!'));
        return redirect()->route('admin.general_setting.pages.payment')->send();
        }
        $manual_payment->delete();

        flashSuccess(__('manual_payment_deleted_successfully'));

        return redirect()->route('settings.payment.manual');
    }

    /**
     * Update the manual payment status.
     */
    public function manualPaymentStatus(Request $request)
    {
        $manual_payment = ManualPayment::findOrFail($request->id);
        $manual_payment->update(['status' => $request->status]);

        return response()->json(['message' => __('payment_status_updated_successfully')]);
    }
}
