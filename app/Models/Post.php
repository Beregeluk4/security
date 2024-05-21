<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body'];

    public function getSummaryAttribute()
    {
        // Split the body into paragraphs
        $paragraphs = explode("\n", $this->body);

        // Take the first paragraph as the summary
        $words = str_word_count($this->body, 1);

        // You may want to limit the length of the summary
        $summary = implode(' ', array_slice($words, 0, 50));

        return $summary;
    }
}
