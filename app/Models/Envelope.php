<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envelope extends Model
{
    use HasFactory;

    protected $fillable = [
        'EmailAddress',
        'EnvelopSubject',
        'Sender',
        'EnvelopeStatus',
        'EnvelopeCreatedAt',
        'SentInitial',
        'LastSent',
        'Completed',
        'Narration',
    ];

    public function created_by()
    {
        return $this->belongsTo(User::class, 'CreatedBy');
    }

    public function documents()
    {
        return $this->hasMany(EnvelopeDocument::class, 'EnvelopeId');
    }

    public function recipients()
    {
        return $this->hasMany(Recipient::class);
    }
}
