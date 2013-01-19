<?php
/**
 * @author Rob van Bentem <robvanbentem@gmail.com>
 * @date 1/19/13 4:34 PM
 */
class HalfLife
{
    /**
     * Calculate rest amount after a certain amount of time.
     * If no amount is given a factor is returned
     *
     * Formula: Ending Amount = Beginning Amount / 2^(time / half-life)
     *
     * @param double $half_time     The half-life
     * @param double $time          Time passed
     * @param double $amount        The amount started with
     * @return float
     */
    public static function remaning($half_life, $time, $amount = null)
    {
        $result = (1 / (pow(2, ($time / $half_life)))) / 1;

        return ($amount === null) ? $result : ($result / 1) * $amount;
    }


    /**
     * Returns the amount of time required to end at a certain amount
     *
     * Formula: elapsed time = half life * log (beginning amount / ending amount) / log 2
     *
     * @param   double  $half_life      The half-life
     * @param   double  $amount         The current amount
     * @param   double  $target         The target amount
     * @return  double
     */
    public static function time_to_amount($half_life, $amount, $target)
    {
        return $half_life * log($amount / $target) / log(2);
    }


    /**
     * Calculate the half time from time passed, beginning and ending amount
     *
     * Formula: Half life = (time * log 2) / log (beginning amount / ending amount)
     *
     * @param   double  $time           Time passed
     * @param   double  $beginning      Beginning amount
     * @param   double  $ending         Ending amount
     * @return  double
     */
    public static function get_half_life($time, $beginning, $ending)
    {
        return ($time * log(2)) / log($beginning / $ending);
    }

    /**
     * Calculate the amount in reverse time
     * If no amount is given a factor is returned
     *
     * Formula: Beginning amount = ending amount * 2^(time / half-life)
     *
     * @param   double  $half_time  The Half-life
     * @param   double  $time       Time back
     * @param   double  $amount     The current amount
     * @return  double
     */
    public static function past_amount($half_life, $time, $amount = null)
    {
        $result = (1 * (pow(2, ($time / $half_life)))) / 1;

        return ($amount === null) ? $result : ($result / 1) * $amount;
    }
}