<?php

namespace Spinen\QuickBooks;

use Illuminate\Database\Eloquent\Relations\HasOne;

trait HasQuickBooksToken
{
    /** Set to Master User */
    public function getMasterIdAttribute(){
        return 1;
    }
    /**
     * Have a quickBooksToken.
     */
    public function quickBooksToken(): HasOne
    {
        return $this->hasOne(Token::class,'user_id','master_id');
    }
}
