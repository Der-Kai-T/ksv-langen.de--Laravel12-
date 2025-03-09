import Calendar from '@event-calendar/core';
import TimeGrid from '@event-calendar/time-grid';
// Import CSS if your build tool supports it
import '@event-calendar/core/index.css';

let ec = new Calendar({
    target: document.getElementById("eventCalendar"),
    props: {
        plugins: [TimeGrid],
        options:{
            view:'timeGridWeek',
            events: [
                {
                    id: 'Test',
                    start: new Date(2025, 3, 9, 15, 0),
                    end: new Date(2025,3,9,16,0)
                }
            ]
        }
    }
})
