<?php
/**
 * CDR facade. Use this to access cdr variables.
 *
 * PHP Version 5
 *
 * @category Pagi
 * @package  CDR
 * @author   Marcelo Gornstein <marcelog@gmail.com>
 * @license  http://www.noneyet.ar/ Apache License 2.0
 * @version  SVN: $Id$
 * @link     http://www.noneyet.ar/
 */
namespace PAGI\CDR;

/**
 * CDR facade. Use this to access cdr variables.
 *
 * PHP Version 5
 *
 * @category Pagi
 * @package  CDR
 * @author   Marcelo Gornstein <marcelog@gmail.com>
 * @license  http://www.noneyet.ar/ Apache License 2.0
 * @link     http://www.noneyet.ar/
 */
interface ICDR
{
    /**
     * Set userfileds for cdr. CDR(userfield).
     *
     * @param string $value New userfields to use.
     *
     * @return void
     */
    public function setUserfield($value);

    /**
     * The channels uses specified field (read-write). CDR(userfield).
     *
     * @return string
     */
    public function getUserfield();

    /**
     * The channel uniqueid. CDR(uniqueid).
     *
     * @return string
     */
    public function getUniqueId();

    /**
     * Sets account code. CDR(accountcode).
     *
     * @param string $value New account code.
     *
     * @return void
     */
    public function setAccountCode($value);

    /**
     * The channel account code. CDR(accountcode).
     *
     * @return string
     */
    public function getAccountCode();

    /**
     * DOCUMENTATION, BILL, IGNORE etc. CDR(amaflags).
     *
     * @return string
     */
    public function getAMAFlags();

    /**
     * Call result. CDR(disposition).
     *
     * @return string
     */
    public function getStatus();

    /**
     * Total answered time for the call in seconds. CDR(billsec).
     *
     * @return string
     */
    public function getAnswerLength();

    /**
     * Total length of the call in seconds. CDR(duration).
     *
     * @return string
     */
    public function getTotalLength();

    /**
     * Time the call ended. CDR(end).
     *
     * @return string
     */
    public function getEndTime();

    /**
     * Time the call was answered. CDR(answer).
     *
     * @return string
     */
    public function getAnswerTime();

    /**
     * Time the call started. CDR(start).
     *
     * @return string
     */
    public function getStartTime();

    /**
     * Returns Last application data. CDR(lastdata).
     *
     * @return string
     */
    public function getLastAppData();

    /**
     * Returns Last application. CDR(lastapp).
     *
     * @return string
     */
    public function getLastApp();

    /**
     * Returns origin channel. CDR(channel).
     *
     * @return string
     */
    public function getChannel();

    /**
     * Returns destination channel. CDR(dstchannel).
     *
     * @return string
     */
    public function getDestinationChannel();

    /**
     * Returns caller id. CDR(clid).
     *
     * @return string
     */
    public function getCallerId();

    /**
     * Returns origin. CDR(src).
     *
     * @return string
     */
    public function getSource();

    /**
     * Returns destination. CDR(dst).
     *
     * @return string
     */
    public function getDestination();

    /**
     * Returns destination context. CDR(dcontext).
     *
     * @return string
     */
    public function getDestinationContext();

    /**
     * Returns a custom field in the cdr. CDR(name)
     *
     * @param string $name Field name.
     *
     * @return string
     */
    public function getCustom($name);

    /**
     * Sets a custom field in the cdr. CDR(name).
     *
     * @param string $name  Field name.
     * @param string $value Field value.
     *
     * @return void
     */
    public function setCustom($name, $value);
}
