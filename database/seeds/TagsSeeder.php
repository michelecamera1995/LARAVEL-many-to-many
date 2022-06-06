<?php

use Illuminate\Database\Seeder;
use App\TagsModel;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = ['viaggi', 'casa', 'stile di vita'];

        foreach ($categories as $category) {
            $new_category = new TagsModel();
            $new_category->name = $category;
            $new_category->save();
        }
    }
}
