<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter
{
  protected $safeParms = [
    'customerId' => ['eq'],
    'amount' => ['eq', 'lt', 'gt', 'lte', 'gte'],
    'status' => ['eq', 'ne'],
    'billedDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
    'paidDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
  ];

  protected $columnMap = [
    'customer_Id' => 'customerId',
    'billed_date' => 'billedDate',
    'paid_date' => 'paidDate',
  ];

  protected $operatorMap = [
    'eq' => '=',
    'lt' => '<',
    'lte' => '<=',
    'gt' => '>',
    'gte' => '>=',
    'ne' => '!='
  ];
}
