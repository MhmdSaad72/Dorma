<?php

namespace App\Page;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
  use SoftDeletes;
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'contacts';

  /**
  * The database primary key value.
  *
  * @var string
  */
  protected $primaryKey = 'id';

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'email' , 'subject' , 'message'];
}
