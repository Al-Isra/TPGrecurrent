# TPGrecurrent

##The business problem
We run a sports association that has an annual membership. Currently, instead of an automated renewal of the membership fee, we request that the customer renew through our web portal. It is an 'opt in' system rather than an automated renewal. This means our retention rate is lower than it should be. The technology that manages our association will not incorporate automated renewals into their platform (cold fusion platform). There is no intention to replace the existing platform (called TPG).

##The business solution
Get the customers data,  get initial payment and setup a recurring payment  in Braintree, and post the customer data back to the original system (TPG) being recorded as "Application WITHOUT Payment". The payment will then be put in manually to the TPG system (eventually to be automated). ThE benefits of this approach is that:

1. We dont have to replace the existing system
2. We get a cheaper rate on our payments (1.75% VS 4.4%)
3. We get recurring payments, which increase our member/customer retention rate.

##The technical challenge
We would like to get the data ourselves via a duplicate set of forms, take payment via a 3rd party recurrent payment platform (such as Braintree), and the automatically submit the customer data to TPG platform without payment.
The automated payment renewal would then happen via the 3rd party platform and would be accounted for manually.

##To assess the job
1. I have included the web files in sequence we wish to replicate, numbered in order that they are submitted, in Trello.
2. There are 3 known complexities 
a) if you submit a JUNIOR plan application, the form (page 4) shows a Guardian Approval field that is not shown on a Senior application.
b) each club has a different set of plans (page 2 - club choice - determines page 3).
c) the plans (page 3) and pricing can be changed by the TPG platform.

##What I need - see Trello for actual tasks. (This is overview).
1. A script that will pull out all relevant fields from each page, that considers the complexities above.
2. A script that will then put those fields into a new webpage that will be used to collect the customer data. This will be run occasionaly to check that the current form matches the form at TPG.
3. A front end with the duplicate form on it that customers will use.
4. A script that will transfer that data into the TPG system via an automated form filler outer.
5. A script that checks whether the TPG forms are the same as the Duplicate form, for each club (remember, complexity 2b and 2c above.)

##Platform
1. Laravel
2. For automated form filling out - consider using codeception or PHPUnit.









