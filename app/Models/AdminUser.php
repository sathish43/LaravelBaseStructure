<?php
/**
 * Admin Users
 *
 * This model will going to hold the table related to admin users and its relations
 * Contians the common validations used by this model
 * 
 * @category  Contus
 * @package   Contus_laravel 5.3
 * @author    Contus Team <developers@contus.in>
 * @copyright Copyright (C) 2016 Contus. All rights reserved.
 * @license   GNU General Public License http://www.gnu.org/copyleft/gpl.html
 * @version   Release: 1.0
 */
namespace Apptha\Models;

use Illuminate\Database\Eloquent\Model;
use Apptha\Models\UserRole;

class AdminUser extends Model{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'admin_users';
  
  public function userRole(){
    return $this->belongsTo(UserRole::class, 'user_role_id','id');
  }
  
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
  'name',
  'mobile_number',
  'email',
  'gender',
  'is_active',
  'password',
  'access_token',
   'address',
   'zipcode',
   'company',
   'creator_id',
   'updator_id'
      ];
}
