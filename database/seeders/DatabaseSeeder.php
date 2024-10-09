<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         $this->call([
            RolesTableSeeder::class,
            AdminsTableSeeder::class, 
            CustomersTableSeeder::class, 
            EmailTemplatesTableSeeder::class, 
            FooterColumnsTableSeeder::class,
            GeneralSettingsTableSeeder::class,
            MenusTableSeeder::class,
            PageAboutItemsTableSeeder::class,
            PageBlogItemsTableSeeder::class,
            PageBoardItemsTableSeeder::class,
            PageCareerItemsTableSeeder::class,
            PageBranchItemsTableSeeder::class,
            PageContactItemsTableSeeder::class,
            PageDeveloperItemsTableSeeder::class,
            PageDocumentItemsTableSeeder::class,
            PageFaqItemsTableSeeder::class,
            PageHomeItemsTableSeeder::class,
            PageOtherItemsTableSeeder::class,
            PagePhotoGalleryItemsTableSeeder::class,
            PagePrivacyItemsTableSeeder::class,
            PageProjectItemsTableSeeder::class,
            PageSeniorItemsTableSeeder::class,
            PageServiceItemsTableSeeder::class,
            PageShopItemsTableSeeder::class,
            PageTeamItemsTableSeeder::class,
            PageTermItemsTableSeeder::class,
            PageVideoGalleryItemsTableSeeder::class,
            RolePagesTableSeeder::class,
            SlidersTableSeeder::class,
            SocialMediaItemsTableSeeder::class,
            WhyChooseItemsTableSeeder::class,

            RolePermissionsTableSeeder::class
            
        ]);
    }
}
