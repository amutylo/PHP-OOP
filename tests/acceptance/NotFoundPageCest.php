<?php 

class NotFoundPageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

   /**
   * @param \AcceptanceTester $I
   *
   * @group page-not-found
   */
    public function pageNotFoundTest(AcceptanceTester $I)
    {
      $I->wantTo('Test the response code for the invoice page');
      $I->amOnPage('/not-found');
      $I->seeResponseCodeIs(404);
      $I->canSee('Page not found');
      $I->canSeeInTitle('Page not found');
    }

}
