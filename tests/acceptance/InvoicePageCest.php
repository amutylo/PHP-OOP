<?php 

class InvoicePageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

   /**
   * @param \AcceptanceTester $I
   *
   * @group invoice
   */
    public function invoiceTest(AcceptanceTester $I)
    {
      $I->wantTo('Test the response code for the invoice page');
      $I->amOnPage('/invoice');
      $I->canSee('This is an invoice');
      $I->seeResponseCodeIs(200);
    }

    /**
     * @param \AcceptanceTester $I
     *
     * @group invoice
     */
    public function invoiceListTest(AcceptanceTester $I)
    {
      $I->wantTo('Test the response code for the invoice list page');
      $I->amOnPage('/invoice/123');
      $I->canSee('This is an invoice');
      $I->seeResponseCodeIs(200);
    }

  /**
     * @param AcceptanceTester $I
     *
     * @group invoice
     * @group invoice-not-found
     */
    public function pageNotFoundTest(AcceptanceTester $I)
    {
        $I->wantTo('Test the response code for the invoice');
        $I->amOnPage('/invoice/rrr/edit/aaa');
        $I->seeResponseCodeIs(404);
    }
}
