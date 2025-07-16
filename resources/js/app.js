import './bootstrap';
import { inject } from '@vercel/analytics';
import { injectSpeedInsights } from '@vercel/speed-insights';
import './../../vendor/power-components/livewire-powergrid/dist/powergrid'
inject();
injectSpeedInsights();
