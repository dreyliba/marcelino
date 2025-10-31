<?php

namespace App\Livewire;

use App\Models\Booking;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class BookingsChart extends ChartWidget
{
    protected ?string $heading = 'Bookings per Month';

    protected ?string $pollingInterval = '30s'; // Optional: Auto refresh every 30 seconds

    protected function getData(): array
    {
        // Use Laravel-Trend to count bookings per month for the last year
        $data = Trend::model(Booking::class)
            ->between(
                start: now()->startOfYear(), // Start from the beginning of the year
                end: now()->endOfYear(),     // End at the end of the year
            )
            ->perMonth()
            ->count();

        // Format the data for Chart.js
        return [
            'datasets' => [
                [
                    'label' => 'Total Bookings',
                    'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
                    'borderColor' => '#dd9718',
                    'backgroundColor' => 'rgba(221, 151, 14, 0.5)',
                ],
            ],
            // Map the months (labels) for the X-axis
            'labels' => $data->map(fn(TrendValue $value) => $value->date),

        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
