<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Post extends Model {


    public function getPubPosts()
    {
        $posts = $this->latest('published_at')
                        ->published() //���������� ����� scopePublished (��������� � ���� ��� scope), � ��� ���������� ������ ��� ��������
                        ->get();

        return $posts;
    }

    //������� ��������� �������
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now())->where('published', '=', 1);
    }

    public function scopeUnPubPost($q)
    {
        $q->where('published_at', '>=', Carbon::now())->orWhere('published', '=', 0);
    }


    public function getUnPubPosts()
    {
        return $this->latest('published_at')->unPubPost()->get();
    }
}
