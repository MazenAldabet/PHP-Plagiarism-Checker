<?php
/*
 The MIT License(MIT)

 Copyright(c) 2016 Copyleaks LTD (https://copyleaks.com)

 Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:

 The above copyright notice and this permission notice shall be included in all
 copies or substantial portions of the Software.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 SOFTWARE.
*/

namespace Copyleaks;

class SubmissionScanning
{
  /**
   * Compare your content with online sources.
   */
  public ?bool $internet;
  /**
   * Check inner properties for more details.
   */
  public ?SubmissionScanningExclude $exclude;
  /**
   * SubmissionScanningRepository[] - Check inner properties of SubmissionScanningRepository for more details.
   */
  public ?array $repositories;
  /**
   * Check inner properties for more details.
   */
  public ?SubmissionScanningCopyleaksDB $copyleaksDb;

  /**
   *@param bool $internet Compare your content with online sources.
   *@param SubmissionScanningExclude $exclude Check inner properties of SubmissionScanningExclude for more details.
   *@param array $repositories SubmissionScanningRepository[] - Check inner properties of SubmissionScanningRepository for more details.
   *@param SubmissionScanningCopyleaksDB $copyleaksDb Check inner properties for more details.
   */
  public function __construct(
    bool $internet = false,
    SubmissionScanningExclude $exclude = null,
    array $repositories = null,
    SubmissionScanningCopyleaksDB $copyleaksDb = null
  ) {
    $filteredProperties = array_filter(get_defined_vars(), function ($value) {
      return $value !== null;
    });

    foreach ($filteredProperties as $property => $value) {
        $this->$property = $value;
    }
  }
}
