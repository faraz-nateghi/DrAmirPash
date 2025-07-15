<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $article = Article::query()->where('id', $request->article_id)->firstOrFail();

        if ($article->comment_status == 0) {
            abort(403);
        } else {
            Comment::query()->create([
                'article_id'   => $request->article_id,
                'author_name'  => $request->name,
                'author_email' => $request->email,
                'author_ip'    => $request->ip(),
                'author_agent' => $request->userAgent(),
                'body'         => $request->body,
            ]);

            $article->increment('comment_count');

            return redirect()->back()->with('success', 'کامنت با موفقیت ثبت شد، پس از بررسی منتشر میشود.');
        }

    }
}
