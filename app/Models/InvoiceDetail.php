<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InvoiceDetail
 * 
 * @property int $id
 * @property int|null $invoice_id
 * @property int|null $quantity
 * @property int|null $price
 * @property int|null $total_amount
 * @property string $auditable_type
 * @property int $auditable_id
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Invoice|null $invoice
 *
 * @package App\Models
 */
class InvoiceDetail extends Model
{
	use SoftDeletes;
	protected $table = 'invoice_details';

	protected $casts = [
		'invoice_id' => 'int',
		'quantity' => 'int',
		'price' => 'int',
		'total_amount' => 'int',
		'auditable_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'invoice_id',
		'quantity',
		'price',
		'total_amount',
		'auditable_type',
		'auditable_id',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function invoice()
	{
		return $this->belongsTo(Invoice::class);
	}
}
