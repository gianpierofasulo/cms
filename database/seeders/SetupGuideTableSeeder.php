<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SetupGuideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();

        SetupGuide::create([
            'task_name' => 'app_setting',
            'title' => 'App Information ',
            'description' => 'Add your app logo, name, description, owner and other information.',
            'action_route' => 'admin.general_setting.system',
            'action_label' => 'Add App Information',
            'status' => 1,
        ]);

        SetupGuide::create([
            'task_name' => 'smtp_setting',
            'title' => 'SMTP Configuration',
            'description' => 'Add your app logo, name, description, owner and other information.',
            'action_route' => 'admin.general_setting.mail',
            'action_label' => 'Add Mail Configuration',
            'status' => 1,
        ]);

        SetupGuide::create([
            'task_name' => 'payment_setting',
            'title' => 'Enable Payment Method',
            'description' => 'Enable to payment methods to receive payments from your customer.',
            'action_route' => 'payment',
            'action_label' => 'Add Payment',
            'status' => 1,
        ]);

        SetupGuide::create([
            'task_name' => 'theme_setting',
            'title' => 'Customize Theme and Banner',
            'description' => 'Customize your theme & Banner to make your app look more attractive.',
            'action_route' => 'admin.general_setting.banner',
            'action_label' => 'Customize Your App Now',
            'status' => 1,
        ]);
    }
}
