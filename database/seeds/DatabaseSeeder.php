<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->call('PostSeeder');
		// $this->call('UserTableSeeder');
	}

}


class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->delete();
        Post::create([
            'title' => 'first post',
            'slug' => 'first-post',
            'excerpt' => '<p>Frist boody post</p>',
            'content' => '<p>Content</p>',
            'published' => true,
            //'published_at' => DB::raw('NOW()'),
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        Post::create([
            'title' => 'second post',
            'slug' => 'second-post',
            'excerpt' => '<p>second boody post</p>',
            'content' => '<p>second Content</p>',
            'published' => false,
            //'published_at' => DB::raw('NOW()'),
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        Post::create([
            'title' => 'third post',
            'slug' => 'third-post',
            'excerpt' => '<p>third boody post</p>',
            'content' => '<p>third Content</p>',
            'published' => false,
            //'published_at' => DB::raw('NOW()'),
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}