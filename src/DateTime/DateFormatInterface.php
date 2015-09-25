<?php

namespace ValueObjects\DateTime;

interface DateFormatInterface {

  /**
   * Set the date format for *all* dates
   *
   * @param string $format DateTime::format()
   */
  static public function setDateFormat($format);

}
