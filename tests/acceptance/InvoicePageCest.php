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
    public function tryToTest(AcceptanceTester $I)
    {
      $I->wantTo('Test the response code for the invoice page');
      $I->amOnPage('/invoice/123');
      $I->canSee('This is an invoice');
      $I->seeResponseCodeIs(200);
    }
}
