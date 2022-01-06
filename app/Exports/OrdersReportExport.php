<?php

namespace App\Exports;

use App\OrderDate;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersReportExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OrderDate::all('order_numbered', 'ordercreated_date', 'service_date', 'signedservi_date', 'invoice_date', 'payment_date', 'receipt_date', 'dataupload_date');
    }

    public function headings(): array
    {
        return [
            'Order Number',
            'Placed On',
            'Service Specification Uploaded On',
            'Signed Service Specification Uploaded On',
            'Invoice Uploaded On',
            'Proof of Payment Uploaded On',
            'Receipt Uploaded On',
            'Data Uploaded On',
        ];
    }
}
