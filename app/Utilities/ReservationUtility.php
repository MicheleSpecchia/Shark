
namespace App\Utilities;

class ReservationUtility
{
    public static function generateTimeSlots()
    {
        $start_time = strtotime("00:00");
        $end_time = strtotime("23:45");
        $interval = 15 * 60; // 15 minuti in secondi
        $time_slots = [];

        while ($start_time <= $end_time) {
            $time_slots[] = date("H:i", $start_time);
            $start_time += $interval;
        }

        return $time_slots;
    }
}
