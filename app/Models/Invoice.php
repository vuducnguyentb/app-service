<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Invoice
 *
 * @property int $id
 * @property string $code
 * @property string $ordered_by
 * @property string $phone_booker
 * @property string $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|InvoiceDetail[] $invoice_details
 * @property Collection|TransactionDetail[] $transaction_details
 *
 * @package App\Models
 */
class Invoice extends BaseModel
{
	protected $table = 'invoices';

	protected $casts = [
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'code',
		'ordered_by',
		'phone_booker',
		'status',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function invoice_details()
	{
		return $this->hasMany(InvoiceDetail::class);
	}

	public function transaction_details()
	{
		return $this->hasMany(TransactionDetail::class);
	}
}
